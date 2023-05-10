const complains = [
    {
        complain: "Problem in our pipe-line",
        date: "Jan-17-2023",
        time: "11.00 AM"
    },
    {
        complain: "Problem in our window",
        date: "Feb-12-2023",
        time: "11.00 AM"
    },
    {
        complain: "Problem in our pipe-line",
        date: "Mar-17-2023",
        time: "5.00 PM"
    }
]

const displayComplains = complains => {
    const historyComplains = document.getElementById('history-complains');
    complains.forEach(complain => {
        const complainDiv = document.createElement('div');
        complainDiv.classList.add('rent-history');
        complainDiv.innerHTML = `
            <p>Complain: <strong>${complain.complain}</strong></p>
            <p>Date: <strong>${complain.date}</strong></p>
            <p>Time: <strong>${complain.time}</strong></p>
        `;
        historyComplains.appendChild(complainDiv)
    });
}

displayComplains(complains);
