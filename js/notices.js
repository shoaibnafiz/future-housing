const notices = [
    {
        date: "Jan-17-2023",
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, error quidem enim nostrum accusamus ducimus ex repudiandae a est laudantium!"
    },
    {
        date: "Feb-12-2023",
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, error quidem enim nostrum accusamus ducimus ex repudiandae a est laudantium!"
    },
    {
        date: "Mar-17-2023",
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, error quidem enim nostrum accusamus ducimus ex repudiandae a est laudantium!"
    }
]

const displayNotices = notices => {
    const historyNotices = document.getElementById('notices');
    notices.forEach(notice => {
        const noticeDiv = document.createElement('div');
        noticeDiv.classList.add('rent-history');
        noticeDiv.innerHTML = `
            <p>Date: <strong>${notice.date}</strong></p>
            <p>${notice.text}</p>
        `;
        historyNotices.appendChild(noticeDiv)
    });
}

displayNotices(notices);
