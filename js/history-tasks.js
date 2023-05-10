const tasks = [
    {
        guardName: "Jabed Karim",
        task: "Bring my parcel",
        date: "Jan-17-2023",
        time: "11.00 AM"
    },
    {
        guardName: "Samad Jia",
        task: "Bring my parcel",
        date: "Feb-12-2023",
        time: "11.00 AM"
    },
    {
        guardName: "Jabed Karim",
        task: "Bring my parcel",
        date: "Mar-17-2023",
        time: "5.00 PM"
    }
]

const displayTasks = tasks => {
    const historyTasks = document.getElementById('history-tasks');
    tasks.forEach(task => {
        const taskDiv = document.createElement('div');
        taskDiv.classList.add('rent-history');
        taskDiv.innerHTML = `
            <p>Guard Name: <strong>${task.guardName}</strong></p>
            <p>Task: <strong>${task.task}</strong></p>
            <p>Date: <strong>${task.date}</strong></p>
            <p>Time: <strong>${task.time}</strong></p>
        `;
        historyTasks.appendChild(taskDiv)
    });
}

displayTasks(tasks);
