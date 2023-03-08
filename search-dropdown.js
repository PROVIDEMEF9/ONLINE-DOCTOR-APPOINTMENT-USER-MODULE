const wrapper = document.querySelector(".wrapper");
const wrapper2 = document.querySelector(".wrappe2");
const wrapper3 = document.querySelector(".wrappe3");
selectBtn = wrapper.querySelector(".select-btn"),
    searchInp = wrapper.querySelector("input"),
    options = wrapper.querySelector(".options");

let doctors = ["Payal Singh", "Ravi Kar", "Tamal Das", "Alok Banerjee", "Aniket Basu", "Riya Goswami", "Subhankar Nath",
    "Nancy Singh", "Shekhar Sharma", "Sumit Ghosh", "Rani Mukherjee"
];

function addCountry(selectedCountry) {
    options.innerHTML = "";
    doctors.forEach(country => {
        let isSelected = country == selectedCountry ? "selected" : "";
        let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}
addCountry();

function updateName(selectedLi) {
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = doctors.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data => {
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));