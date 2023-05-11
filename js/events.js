const events = [
    {
        date: "Jan-17-2023",
        details: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, error quidem enim nostrum accusamus ducimus ex repudiandae a est laudantium!"
    },
    {
        date: "Feb-12-2023",
        details: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, error quidem enim nostrum accusamus ducimus ex repudiandae a est laudantium!"
    },
    {
        date: "Mar-17-2023",
        details: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, error quidem enim nostrum accusamus ducimus ex repudiandae a est laudantium!"
    }
]

const displayEvents = events => {
    const historyEvents = document.getElementById('events');
    events.forEach(event => {
        const eventDiv = document.createElement('div');
        eventDiv.classList.add('rent-history');
        eventDiv.innerHTML = `
            <p>Date: <strong>${event.date}</strong></p>
            <p>${event.details}</p>
        `;
        historyEvents.appendChild(eventDiv)
    });
}

displayEvents(events);
