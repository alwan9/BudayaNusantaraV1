const scenes = [
    {
        story: "Kamu memulai perjalanan di Pulau Dewata, Bali. Pulau ini tidak hanya terkenal karena keindahan alamnya, tetapi juga karena kekayaan budayanya seperti tarian sakral, upacara adat, dan musik tradisional yang unik.",
        question: "Apa nama tarian terkenal dari Bali?",
        choices: ["Tari Kecak", "Tari Jaipong", "Tari Saman", "Tari Piring"],
        correct: "Tari Kecak"
    }, {
        story: "Perjalananmu berlanjut ke Yogyakarta, kota budaya yang kental dengan tradisi Jawa. Di sini kamu melihat berbagai warisan budaya seperti keraton, batik, dan candi-candi peninggalan kerajaan Hindu dan Buddha.",
        question: "Apa nama candi terkenal di dekat Yogyakarta?",
        choices: ["Borobudur", "Prambanan", "Cetho", "Muaro Jambi"],
        correct: "Prambanan"
    },
    {
        story: "Kamu tiba di pedalaman Kalimantan dan disambut oleh masyarakat Dayak yang ramah. Mereka memperlihatkan rumah panjang dan memperdengarkan alat musik tradisional mereka yang khas.",
        question: "Alat musik tradisional Kalimantan adalah?",
        choices: ["Kolintang", "Sape", "Gamelan", "Angklung"],
        correct: "Sape"
    },
    {
        story: "Perjalananmu membawa ke dataran tinggi Sumatera Utara, di mana masyarakat Batak melestarikan tradisi mereka dengan penuh semangat, termasuk pakaian adat, musik gondang, dan ritual adat.",
        question: "Kain khas Batak Toba disebut?",
        choices: ["Ulos", "Songket", "Lurik", "Ikat"],
        correct: "Ulos"
    }, {
        story: "Terakhir, kamu menjelajahi Papua. Di antara hutan lebat dan pegunungan, kamu menemukan budaya lokal yang sangat unik dan otentik, termasuk tarian perang dan alat musik dari kayu dan kulit.",
        question: "Apa nama alat musik khas Papua?",
        choices: ["Tifa", "Kendang", "Rebana", "Bonang"],
        correct: "Tifa"
    }, {
        story: "Di tanah Minangkabau, kamu menyaksikan pertunjukan tari di mana para penari menari di atas pecahan piring dengan penuh keseimbangan.",
        question: "Apa nama tari khas Minangkabau ini?",
        choices: ["Tari Piring", "Tari Lilin", "Tari Topeng", "Tari Payung"],
        correct: "Tari Piring"
    }, {
        story: "Di Makassar, kamu menghadiri pesta adat masyarakat Bugis yang kaya akan simbol dan filosofi kehidupan bahari.",
        question: "Apa nama perahu tradisional masyarakat Bugis?",
        choices: ["Phinisi", "Jukung", "Lancang", "Perahu Sandeq"],
        correct: "Phinisi"
    }, {
        story: "Di Tanah Toraja, Sulawesi Selatan, kamu menyaksikan rumah adat yang tinggi dan melengkung, serta upacara kematian yang megah.",
        question: "Apa nama rumah adat suku Toraja?",
        choices: ["Tongkonan", "Rumah Gadang", "Joglo", "Limas"],
        correct: "Tongkonan"
    }, {
        story: "Di Jakarta, kamu melihat boneka raksasa yang menari diiringi musik khas Betawi dalam sebuah arak-arakan budaya.",
        question: "Apa nama boneka raksasa khas Betawi ini?",
        choices: ["Ondel-ondel", "Wayang Golek", "Reog", "Barongan"],
        correct: "Ondel-ondel"
    }, {
        story: "Saat berada di Banten, kamu menyaksikan atraksi yang menegangkan di mana seseorang kebal terhadap tusukan benda tajam.",
        question: "Apa nama seni pertunjukan ini?",
        choices: ["Debus", "Silat", "Reog", "Ketoprak"],
        correct: "Debus"
    }, {
        story: "Kamu tiba di Sumatera Selatan dan menyaksikan rumah adat dengan atap bertingkat yang khas serta ukiran indah pada dindingnya.",
        question: "Apa nama rumah adat dari Sumatera Selatan?",
        choices: ["Rumah Limas", "Rumah Gadang", "Tongkonan", "Joglo"],
        correct: "Rumah Limas"
    }, {
        story: "Di tanah Bugis, kamu melihat alat musik tiup panjang yang biasa dimainkan saat upacara adat dan penyambutan tamu.",
        question: "Apa nama alat musik tiup tradisional Bugis ini?",
        choices: ["Puik-puik", "Serunai", "Saluang", "Seruling"],
        correct: "Puik-puik"
    }, {
        story: "Kamu mengunjungi Nusa Tenggara Timur dan bertemu dengan masyarakat yang memainkan alat musik berbentuk setengah lingkaran dari daun lontar.",
        question: "Apa nama alat musik unik ini?",
        choices: ["Sasando", "Sape", "Kolintang", "Kecapi"],
        correct: "Sasando"
    }, {
        story: "Di Jawa Barat, kamu menyaksikan pertunjukan wayang yang menggunakan boneka kayu tiga dimensi dengan kostum khas.",
        question: "Apa nama pertunjukan wayang ini?",
        choices: ["Wayang Golek", "Wayang Kulit", "Wayang Orang", "Wayang Beber"],
        correct: "Wayang Golek"
    }, {
        story: "Kamu berkunjung ke Lombok dan disambut dengan iringan musik tradisional yang dimainkan oleh kelompok besar dengan gendang besar.",
        question: "Apa nama pertunjukan ini?",
        choices: ["Gendang Beleq", "Rebana", "Gamelan", "Tifa"],
        correct: "Gendang Beleq"
    }, {
        story: "Di Kalimantan Tengah, kamu melihat upacara adat suku Dayak yang menggunakan senjata tradisional sebagai bagian dari tarian perang.",
        question: "Apa nama tarian ini?",
        choices: ["Tari Mandau", "Tari Gantar", "Tari Saman", "Tari Kipas"],
        correct: "Tari Mandau"
    },
    {
        story: "Kamu tiba di Maluku dan menyaksikan masyarakat memukul alat musik tabung saat upacara adat.",
        question: "Apa nama alat musik ini?",
        choices: ["Tifa", "Kendang", "Rebana", "Gendang"],
        correct: "Tifa"
    },

    {
        story: "Perjalanan membawamu ke Sulawesi Utara di mana kamu melihat pertunjukan alat musik pukul dari kayu yang disusun bertingkat.",
        question: "Apa nama alat musik tersebut?",
        choices: ["Kolintang", "Gamelan", "Sape", "Rebana"],
        correct: "Kolintang"
    }, {
        story: "Di tanah Riau, kamu menyaksikan tarian Melayu klasik yang lembut dan biasanya dimainkan saat acara resmi kerajaan.",
        question: "Apa nama tarian tersebut?",
        choices: ["Tari Zapin", "Tari Serimpi", "Tari Lenso", "Tari Payung"],
        correct: "Tari Zapin"
    }, {
        story: "Kamu tiba di Nusa Tenggara Barat dan menyaksikan tarian dinamis yang dimainkan oleh dua pemuda dengan perisai dan rotan.",
        question: "Apa nama tarian perang tradisional ini?",
        choices: ["Tari Peresean", "Tari Kancet", "Tari Kabasaran", "Tari Caci"],
        correct: "Tari Peresean"
    }, {
        story: "Kamu mengunjungi Minahasa di Sulawesi Utara dan menyaksikan sekelompok pria mengenakan baju perang merah menari dengan tombak.",
        question: "Apa nama tarian perang khas Minahasa ini?",
        choices: ["Tari Kabasaran", "Tari Mandau", "Tari Sajojo", "Tari Cakalele"],
        correct: "Tari Kabasaran"
    }, {
        story: "Saat berada di Kalimantan Barat, kamu melihat rumah panjang yang ditinggali banyak keluarga dan menjadi pusat kegiatan adat.",
        question: "Apa nama rumah adat suku Dayak ini?",
        choices: ["Rumah Panjang", "Rumah Limas", "Tongkonan", "Joglo"],
        correct: "Rumah Panjang"
    }, {
        story: "Kamu menelusuri desa di Maluku dan disambut dengan tarian cepat dan ritmis yang dilakukan oleh dua barisan penari laki-laki dan perempuan.",
        question: "Apa nama tarian ini?",
        choices: ["Tari Cakalele", "Tari Lenso", "Tari Lulo", "Tari Saman"],
        correct: "Tari Cakalele"
    }, {
        story: "Di Gorontalo, kamu menyaksikan pertunjukan tari berpasangan yang menggambarkan kebersamaan dalam masyarakat.",
        question: "Apa nama tari pergaulan khas Gorontalo?",
        choices: ["Tari Dana-Dana", "Tari Lenso", "Tari Kipas", "Tari Lulo"],
        correct: "Tari Dana-Dana"
    }, {
        story: "Di Bali, kamu menghadiri upacara keagamaan di pura yang dihiasi dengan sesajen kecil berisi bunga dan dupa.",
        question: "Apa nama sesajen harian umat Hindu Bali?",
        choices: ["Canang Sari", "Banten", "Liwetan", "Tumpeng"],
        correct: "Canang Sari"
    }, {
        story: "Kamu berada di Sumatera Barat dan mengunjungi rumah tradisional yang memiliki atap bergonjong seperti tanduk kerbau.",
        question: "Apa nama rumah adat ini?",
        choices: ["Rumah Gadang", "Joglo", "Rumah Limas", "Tongkonan"],
        correct: "Rumah Gadang"
    }, {
        story: "Di Jakarta, kamu menghadiri pertunjukan musik tradisional Betawi dengan alat musik seperti gambang kromong.",
        question: "Apa nama pertunjukan musik khas Betawi ini?",
        choices: ["Gambang Kromong", "Tanjidor", "Saluang", "Karinding"],
        correct: "Gambang Kromong"
    }, {
        story: "Di Kalimantan Selatan, kamu menghadiri pesta rakyat Banjar dengan pertunjukan wayang dan pertarungan seni bela diri.",
        question: "Apa nama seni bela diri khas Banjar?",
        choices: ["Kuntau", "Pencak Silat", "Debus", "Caci"],
        correct: "Kuntau"
    }, {
        story: "Di Kalimantan Selatan, kamu menghadiri pesta rakyat Banjar dengan pertunjukan wayang dan pertarungan seni bela diri.",
        question: "Apa nama seni bela diri khas Banjar?",
        choices: ["Kuntau", "Pencak Silat", "Debus", "Caci"],
        correct: "Kuntau"
    }, {
        story: "Kamu sampai di daerah Flores, NTT dan menyaksikan duel tarian pria dengan cambuk yang menggambarkan keberanian dan kehormatan.",
        question: "Apa nama tarian tradisional ini?",
        choices: ["Tari Caci", "Tari Peresean", "Tari Kabasaran", "Tari Lulo"],
        correct: "Tari Caci"
    }, {
        story: "Kamu berada di Bengkulu dan mendengar alunan musik dari alat pukul logam kecil yang biasanya dimainkan dalam pertunjukan tradisional.",
        question: "Apa nama alat musik tradisional Bengkulu ini?",
        choices: ["Doll", "Rebana", "Kolintang", "Gong"],
        correct: "Doll"
    }, {
        story: "Di Sulawesi Tenggara, kamu melihat sekelompok orang menari sambil berpegangan tangan membentuk lingkaran besar.",
        question: "Apa nama tarian pergaulan khas Sulawesi Tenggara ini?",
        choices: ["Tari Lulo", "Tari Sajojo", "Tari Lenso", "Tari Serimpi"],
        correct: "Tari Lulo"
    }, {
        story: "Kamu mengunjungi Jambi dan melihat rumah adat beratap panjang dengan banyak tiang penyangga.",
        question: "Apa nama rumah adat dari Jambi?",
        choices: ["Rumah Kajang Leko", "Rumah Bubungan Tinggi", "Rumah Panjang", "Joglo"],
        correct: "Rumah Kajang Leko"
    }, {
        story: "Di Kepulauan Riau, kamu menyaksikan pertunjukan musik khas Melayu dengan alat tiup dari bambu.",
        question: "Apa nama alat musik tradisional Melayu ini?",
        choices: ["Serunai", "Saluang", "Sape", "Tifa"],
        correct: "Serunai"
    }, {
        story: "Kamu sampai di Provinsi Banten dan melihat peragaan seni bela diri yang menunjukkan kekebalan tubuh terhadap benda tajam dan api.",
        question: "Apa nama pertunjukan tradisional tersebut?",
        choices: ["Debus", "Kuntau", "Reog", "Caci"],
        correct: "Debus"
    }, {
        story: "Di Kalimantan Timur, kamu melihat alat musik berbentuk gitar panjang dengan ukiran khas suku Dayak.",
        question: "Apa nama alat musik ini?",
        choices: ["Sape", "Sasando", "Kolintang", "Kecapi"],
        correct: "Sape"
    }, {
        story: "Di Sulawesi Tengah, kamu melihat rumah adat unik dengan bentuk seperti rumah panggung tinggi dan atap runcing.",
        question: "Apa nama rumah adat Sulawesi Tengah?",
        choices: ["Lobo", "Tongkonan", "Gadang", "Limas"],
        correct: "Lobo"
    }, {
        story: "Kamu tiba di Bali dan menyaksikan tarian klasik dengan gerakan mata dan jari yang sangat ekspresif.",
        question: "Apa nama tarian klasik dari Bali ini?",
        choices: ["Tari Legong", "Tari Kecak", "Tari Saman", "Tari Jaipong"],
        correct: "Tari Legong"
    }, {
        story: "Kamu berada di Jawa Tengah dan melihat pertunjukan teater tradisional yang menceritakan cerita kerajaan dalam bentuk sandiwara.",
        question: "Apa nama seni pertunjukan ini?",
        choices: ["Ketoprak", "Wayang Orang", "Ludruk", "Lenong"],
        correct: "Ketoprak"
    }, {
        story: "Saat di Jawa Timur, kamu menyaksikan pertunjukan komedi tradisional yang dibumbui dengan sindiran sosial dan humor.",
        question: "Apa nama seni pertunjukan ini?",
        choices: ["Ludruk", "Wayang Golek", "Ketoprak", "Lenong"],
        correct: "Ludruk"
    }, {
        story: "Kamu berkeliling ke daerah Betawi dan menyaksikan pertunjukan tradisional yang menggabungkan unsur musik, tari, dan dialog lucu.",
        question: "Apa nama pertunjukan khas Betawi ini?",
        choices: ["Lenong", "Ludruk", "Ketoprak", "Wayang Orang"],
        correct: "Lenong"
    }

];

let current = 0;
let score = 0;
let timer = 30;
let interval;
let playing = false;

function startGame() {
    current = 0;
    score = 0;
    timer = 30;
    playing = true;
    updateScore();
    document.getElementById("next-btn").style.display = "none";
    document.getElementById("popup").classList.add("hidden");
    startTimer();
    loadScene();
}

function startTimer() {
    clearInterval(interval);
    interval = setInterval(() => {
        if (!playing) return;
        timer--;
        document.getElementById("timer").textContent = `Waktu: ${timer} detik`;
        if (timer <= 0) {
            playing = false;
            showPopup("⏱️ Waktu Habis!", true);
            setTimeout(endGame, 2000);
        }
    }, 1000);
}

function loadScene() {
    const scene = scenes[current];
    document.getElementById("story-box").textContent = scene.story;
    document.getElementById("question-box").textContent = scene.question;

    const answersDiv = document.getElementById("answers");
    answersDiv.innerHTML = "";
    scene.choices.forEach(choice => {
        const btn = document.createElement("button");
        btn.className = "btn";
        btn.textContent = choice;
        btn.onclick = () => handleAnswer(choice);
        answersDiv.appendChild(btn);
    });
}

function handleAnswer(choice) {
    if (!playing) return;

    const scene = scenes[current];
    if (choice === scene.correct) {
        score++;
        showPopup("✅ Benar!");
    } else {
        showPopup(`❌ Salah!\nJawaban: ${scene.correct}`);
    }

    updateScore();
    current++;

    if (current < scenes.length) {
        setTimeout(() => {
            document.getElementById("popup").classList.add("hidden");
            loadScene();
        }, 1200);
    } else {
        setTimeout(endGame, 1500);
    }
}

function updateScore() {
    document.getElementById("score").textContent = `Skor: ${score}`;
}

function endGame() {
    playing = false;
    clearInterval(interval);
    document.getElementById("story-box").textContent = "🎉 Perjalanan selesai! Kamu telah menjelajahi budaya Nusantara.";
    document.getElementById("question-box").textContent = "";
    document.getElementById("answers").innerHTML = "";
    document.getElementById("timer").textContent = "Waktu: 0 detik";
    document.getElementById("next-btn").style.display = "inline-block";
    document.getElementById("next-btn").textContent = "Main Lagi";
    showPopup(`🏁 Kuis Selesai!\nSkor akhir kamu: ${score} / ${scenes.length}`, true);
}

function showPopup(message, longer = false) {
    const popup = document.getElementById("popup");
    const popupContent = document.getElementById("popup-content");
    popupContent.textContent = message;
    popup.classList.remove("hidden");

    setTimeout(() => {
        if (!longer) popup.classList.add("hidden");
    }, longer ? 2000 : 1000);
}
