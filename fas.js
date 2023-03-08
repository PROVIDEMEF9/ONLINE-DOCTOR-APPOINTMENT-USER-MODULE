let doc_con = document.getElementById('doc_container');
let col3 = document.getElementById('col3');
let main_col = document.getElementById('main_col');

const img = document.querySelectorAll('.img-fluid');
const button = document.querySelectorAll('.btn1');





const book = document.querySelectorAll('.book_appoinment');
const after_pick_show2 = document.querySelectorAll('.after_pick_show');
const cross_press = document.querySelectorAll('.cross_press');
const cross_press1 = document.querySelectorAll('.cross_press1');
const big = document.querySelectorAll('.big');
const mid = document.querySelectorAll('.mid');
for (let index = 0; index < book.length; index++) {
    const element = book[index];
    element.addEventListener('click', function click_on() {



        if (screen.width < 1800 && screen.width > 1100) {
            doc_con.classList.remove('container');
            doc_con.classList.add('container-fluide');

            main_col.classList.remove('col-md-12');
            main_col.classList.add('col-md-8');

            col3.classList.remove('off');
            after_pick_show2[index].classList.remove('off');
        } else {
            doc_con.classList.remove('container-fluide');
            doc_con.classList.add('container');

            main_col.classList.remove('col-md-8');
            main_col.classList.add('col-md-12');

            col3.classList.add('off');

            after_pick_show2[index].classList.add('off');
            big[index].classList.add('off');
            mid[index].classList.remove('off');
        }

    });
}


for (let j = 0; j < cross_press.length; j++) {
    const element = cross_press[j];


    element.addEventListener('click', function ab() {
        if (screen.width < 1800 && screen.width > 1100) {
            doc_con.classList.remove('container-fluide');
            doc_con.classList.add('container');

            main_col.classList.remove('col-md-9');
            main_col.classList.add('col-md-12');

            col3.classList.add('off');

            after_pick_show2[j].classList.add('off');
        }

    });

}

for (let j = 0; j < cross_press1.length; j++) {
    const element = cross_press1[j];


    element.addEventListener('click', function ab() {

        mid[j].classList.add('off');
    });

}