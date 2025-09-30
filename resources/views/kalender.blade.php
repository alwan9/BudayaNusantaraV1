@include('layouts.header')
<style>
    .calendar {
      
        padding: 20px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .calendar h2 {
        margin-bottom: 10px;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 8px;
    }

    .day {
        padding: 10px;
        background: #e5e5e5;
        border-radius: 6px;
        position: relative;
        cursor: default;
        transition: 0.3s;
    }

    .day:hover {
        background: #d4d4d4;
    }

    .day.active {
        background-color: #f97316;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    .tooltip {
        position: absolute;
        bottom: 120%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #1e293b;
        color: #fff;
        padding: 5px 8px;
        font-size: 12px;
        border-radius: 4px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease;
    }

    .day.active:hover .tooltip {
        opacity: 1;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .day.empty {
        visibility: hidden;
    }

    .day-header {
        font-weight: bold;
    }
</style>
@include('components.navbar')


<div class="flex items-center h-[100vh] w-full justify-center">

    <div class="grid grid-cols-2 gap-10">

        <div class="calendar">
            <div class="nav">
                <button onclick="prevMonth()">←</button>
                <h2 id="monthYear"></h2>
                <button onclick="nextMonth()">→</button>
            </div>

            <div class="calendar-grid" id="calendarDays"></div>

        </div>
        <div class="bg-zinc-50 shadow-xl rounded-2xl px-[5%] py-[4%]">
            <h1 class="text-2xl mb-5">Daftar Acara</h1>
            <div class="event-list max-h-[300px] overflow-y-auto pr-2 space-y-2" id="eventList"></div>
 
        </div>
    </div>
</div>



<script>
    const acaraRaw = @json($data_acara);

    const acaraList = acaraRaw.map(item => ({
        id: item.id,
        judul: item.judul,
        lokasi: item.lokasi,
        tanggal: item.tanggal_mulai.split('T')[0],
        img: item.images?.img1 ? `/storage/${item.images.img1}` : '/assets/default-image.jpg'
    }));

    let currentDate = new Date();

    function renderCalendar() {
        const monthYear = document.getElementById("monthYear");
        const daysContainer = document.getElementById("calendarDays");
        const eventList = document.getElementById("eventList");

        daysContainer.innerHTML = "";
        eventList.innerHTML = "";

        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const totalDays = new Date(year, month + 1, 0).getDate();

        const namaBulan = currentDate.toLocaleString('id-ID', {
            month: 'long',
            year: 'numeric'
        });
        monthYear.textContent = namaBulan;

        const days = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
        for (const d of days) {
            const header = document.createElement("div");
            header.className = "day day-header";
            header.textContent = d;
            daysContainer.appendChild(header);
        }

        for (let i = 0; i < firstDay; i++) {
            const empty = document.createElement("div");
            empty.className = "day empty";
            daysContainer.appendChild(empty);
        }

        for (let d = 1; d <= totalDays; d++) {
            const tanggal = `${year}-${String(month + 1).padStart(2, '0')}-${String(d).padStart(2, '0')}`;
            const eventsToday = acaraList.filter(acara => acara.tanggal === tanggal);

            const day = document.createElement("div");
            day.className = "day";
            day.textContent = d;

            if (eventsToday.length > 0) {
                day.classList.add("active");
                day.onclick = () => showEvents(tanggal);
            }

            daysContainer.appendChild(day);
        }
    }

   function showEvents(tanggal) {
    const eventList = document.getElementById("eventList");
    eventList.innerHTML = "";

    const acaraHariIni = acaraList.filter(acara => acara.tanggal === tanggal);

    if (acaraHariIni.length === 0) {
        eventList.innerHTML = "<p class='text-sm text-gray-500'>Tidak ada acara hari ini.</p>";
        return;
    }

    acaraHariIni.forEach(acara => {
        const card = document.createElement("a");
        card.href = `/acara/${acara.id}`;
          card.target = "_blank"; 
        card.className = "block bg-orange-100 rounded-2xl flex items-center gap-2 p-4 mb-1 hover:bg-orange-200 transition";
        card.innerHTML = `
            <img src="${acara.img}" class="w-[50px] h-[50px] bg-white rounded-full object-cover" alt="Gambar">
            <div>
                <h1 class="font-semibold text-xl">${acara.judul}</h1>
                <h1 class="text-orange-700 line-clamp-2">${acara.lokasi}</h1>
            </div>
        `;
        eventList.appendChild(card);
    });
}



    function prevMonth() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    }

    function nextMonth() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    }

    renderCalendar();
</script>



@include('layouts.footer')
