/* Markup for History Flat Rent */
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


/* Markup for History Guests */
const guests = [
    {
        guestName: "Ruposh",
        guestCell: "01307464455",
        totalGuest: 5,
        visitPurpose: "meeting",
        qrCode: 3044,
        date: "Jan-02-2023",
        time: "9-43-43 PM"
    },
    {
        guestName: "Heera",
        guestCell: "01307464455",
        totalGuest: 3,
        visitPurpose: "meeting",
        qrCode: 6863,
        date: "Feb-02-2023",
        time: "10-43-43 PM"
    },
    {
        guestName: "Ajnabi",
        guestCell: "01307464455",
        totalGuest: 4,
        visitPurpose: "meeting",
        qrCode: 2542,
        date: "Mar-02-2023",
        time: "11-43-43 PM"
    }
]

const displayHistoryGuests = guests => {
    const historyGuests = document.getElementById('history-guests');
    guests.forEach(guest => {
        const guestDiv = document.createElement('div');
        guestDiv.classList.add('rent-history');
        guestDiv.innerHTML = `
            <p>Guest Name: <strong>${guest.guestName}</strong></p>
            <p>Guest Cell: <strong>${guest.guestCell}</strong></p>
            <p>Total Guest: <strong>${guest.totalGuest}</strong></p>
            <p>Visit Purpose: <strong>${guest.visitPurpose}</strong></p>
            <p>QR Code: <strong>${guest.qrCode}</strong></p>
            <p>Date: <strong>${guest.date}</strong></p>
            <p>Time: <strong>${guest.time}</strong></p>
        `;
        historyGuests.appendChild(guestDiv)
    });
}


/* Markup for History Tasks */
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


/* Markup for History Complains */
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




displayHistoryFlatRents(flatRents);
displayHistoryGuests(guests);
displayTasks(tasks);
displayComplains(complains);

document.getElementById('navbar-nav').addEventListener('click', function (e) {
    const historyFlatRentContainer = document.getElementById('history-flat-rent-container');
    const historyTasksContainer = document.getElementById('history-tasks-container');
    const historyComplainsContainer = document.getElementById('history-complains-container');
    const historyGuestsContainer = document.getElementById('history-guests-container');

    const addressLink = e.target.text;
    if (addressLink === "Flat Rent & Utility Bills") {
        historyFlatRentContainer.classList.remove('d-none');
        historyGuestsContainer.classList.add('d-none');
        historyTasksContainer.classList.add('d-none');
        historyComplainsContainer.classList.add('d-none');
    }
    else if (addressLink === "All Guests") {
        historyFlatRentContainer.classList.add('d-none');
        historyGuestsContainer.classList.remove('d-none');
        historyTasksContainer.classList.add('d-none');
        historyComplainsContainer.classList.add('d-none');
    }
    else if (addressLink === "Tasks") {
        historyFlatRentContainer.classList.add('d-none');
        historyGuestsContainer.classList.add('d-none');
        historyTasksContainer.classList.remove('d-none');
        historyComplainsContainer.classList.add('d-none');
    }
    else if (addressLink === "Complains") {
        historyFlatRentContainer.classList.add('d-none');
        historyGuestsContainer.classList.add('d-none');
        historyTasksContainer.classList.add('d-none');
        historyComplainsContainer.classList.remove('d-none');
    }
})