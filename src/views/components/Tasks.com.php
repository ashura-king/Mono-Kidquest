<?php foreach($records as $record): ?>
                <tr>
                <td><?= $record->subject ?></td>
                <td>
                    <select >
                        <option value="pending">Pending</option>
                        <option value="complete">Complete</option>
                    </select>
                </td>
                <td>
                    <button>Complete</button>
                    <button>Remove</button>
                </td>
                </tr>
<?php endforeach ?>