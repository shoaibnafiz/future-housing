const flatRents = [
    {
        rentAmount: 120000,
        gasBill: 1080,
        rentMonth: "January",
        bkashTrx: "xyzabc",
        bkashCell: "01790323757",
        date: "Jan-02-2023",
        time: "10-43-43 PM"
    },
    {
        rentAmount: 120000,
        gasBill: 1080,
        rentMonth: "February",
        bkashTrx: "xyzabc",
        bkashCell: "01790323757",
        date: "Feb-02-2023",
        time: "10-43-43 PM"
    },
    {
        rentAmount: 120000,
        gasBill: 1080,
        rentMonth: "March",
        bkashTrx: "xyzabc",
        bkashCell: "01790323757",
        date: "Mar-02-2023",
        time: "10-43-43 PM"
    }
]

const displayHistoryFlatRents = flatRents => {
    const historyFlatRents = document.getElementById('history-flat-rent');
    flatRents.forEach(flatRent => {
        const rentDiv = document.createElement('div');
        rentDiv.classList.add('rent-history');
        rentDiv.innerHTML = `
            <p>Rent Amount: TK<strong>${flatRent.rentAmount}</strong></p>
            <p>Gas Bill: TK<strong>${flatRent.gasBill}</strong></p>
            <p>Rent of Month: <strong>${flatRent.rentMonth}</strong></p>
            <p>Bkash Trx ID: <strong>${flatRent.bkashTrx}</strong></p>
            <p>Bkash Cell: <strong>${flatRent.bkashCell}</strong></p>
            <p>Date: <strong>${flatRent.date}</strong></p>
            <p>Time: <strong>${flatRent.time}</strong></p>
        `;
        historyFlatRents.appendChild(rentDiv)
    });
}

displayHistoryFlatRents(flatRents);
