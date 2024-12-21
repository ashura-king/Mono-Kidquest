document.addEventListener('DOMContentLoaded', async function () {
    await loadtasks();
});

async function loadtasks() {
    const tbody = document.getElementById('tbody');

    const res = await fetch('/records/tasks', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    });

    const data = await res.json();

    let contents = "";

    data.tasks.forEach((task) => {
        contents += `
            <tr id="task-row-${task.id}" class="${task.status === 'complete' ? 'task-completed' : ''}">
                <td>${task.subject}</td>
                <td>
                    <select id="status-${task.id}" onchange="updateTaskStatus(${task.id}, this.value)">
                        <option value="pending" ${task.status === 'pending' ? 'selected' : ''}>Pending</option>
                        <option value="complete" ${task.status === 'complete' ? 'selected' : ''}>Complete</option>
                    </select>
                </td>
                <td>
                    <button onclick="completeTask(${task.id})">Complete</button>
                    <button onclick="removeTask(${task.id})">Remove</button>
                </td>
            </tr>
        `;
    });

    tbody.innerHTML = contents;
}

async function removeTask(id) {
    const res = await fetch('/records/delete', {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id })
    });

    if (res.ok) {
        loadtasks();
    }
}

document.getElementById('task-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(e.target);
    const body = Object.fromEntries(formData.entries());

    const res = await fetch('/records/create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(body)
    });

    if (res.ok) {
        loadtasks();
    }
});

async function completeTask(id) {
    const selectElement = document.getElementById(`status-${id}`);
    selectElement.value = "complete";
    updateTaskStatus(id, "complete");
}

async function updateTaskStatus(id, status) {
    const taskRow = document.getElementById(`task-row-${id}`);
    taskRow.classList.toggle('task-completed', status === 'complete');
    
    const res = await fetch('/records/update', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id, status: status })
    });

    if (!res.ok) {
        console.error('Failed to update task status');
    }
}
