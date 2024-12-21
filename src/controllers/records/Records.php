<?php
class Records extends Controller {

    #[Route(method: 'GET')]
    public function index(Request $request, $msg = null) {
        return view('Record');
    }


    #[Route(path: '/tasks', method: 'POST')]
    public function getTasks(Request $request) {
        return json([
            'tasks' => [...Record::find()]
        ]);
    }

    #[Route('/create', method: 'POST')]
    public function record(Request $request) {
        $subject = $request->body['subject'] ?? '';
        $completedTask = $request->body['completedTask'] ?? '';

        $result = new Validator([
            'subject' => [
                'required' => true
            ],
            'completedTask' => [
                'required' => true
            ]
        ], [
            'subject' => $subject,
            'completedTask' => $completedTask
        ]);

        if (!$result->isValid()) {    
            http_response_code(200);
            return json(['errors' => $result->getErrors()]);
        }

        // Sanitizing inputs
        $subject = htmlspecialchars($subject);
        $completedTask = htmlspecialchars($completedTask);

        $record = new Record(
            subject: $subject,
            completedTask: $completedTask
        );

        $isCreated = Record::create($record);

        if(!$isCreated){
            http_response_code(400);
            return json([
                'msg' => 'Task not created.'
            ]);
        }
        
        http_response_code(201);
        return json([
            'msg' => 'Task added successfully',
        ]);
    }

    #[Route('/delete', method: 'DELETE')]
    public function delete(Request $request ) {
        $id = $request->body['id'];

        $is_deleted = Record::delete($id);

        if (!$is_deleted) {
            http_response_code(400);
            return json(['msg' => 'Record not deleted.']);
        }

        http_response_code(200);
        return json(['msg' => 'Record deleted successfully.']);
    }
}
