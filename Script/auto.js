let subMenu = document.getElementById("subMenu");
const form = document.getElementById('edit-form');
const edit = document.getElementById('edit-profile');
const user = document.getElementById('menu-user');
const exit = document.getElementById('exit');
const deleteButton = document.getElementById('delete');

function toggleMenu() {
    subMenu.classList.toggle("open-menu");

    edit.addEventListener('click', () => {
        form.style.display = "grid";

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const body = Object.fromEntries(formData.entries());

            const res = await fetch('/about/update', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(body)
            });

            const data = await res.json();

            if (res.ok) {
                user.innerText = data.username;
                form.style.display = "none";
            }
        });
    });
}

deleteButton.addEventListener('click', async () => {
    
    const res = await fetch('/about/delete', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        }
    });

    const data = await res.json();

    if (res.ok) {
        window.location.href = data.route
    } else {
        console.error('Error:', data.msg);
    }
});

exit.addEventListener('click', () => {
    form.style.display = "none";
    console.log('clicked');
});
