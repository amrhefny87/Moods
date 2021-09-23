function selecteds(img, name, id, isInSall) {
    (this.img = img),
        (this.name = name),
        (this.id = id),
        (this.isInSall = isInSall);
}

const selectP1 = new selecteds("images/ch1.png", "The Outlier", 1, false);
const selectP2 = new selecteds("images/ch2.png", "The Stronger", 2, false);
const selectP3 = new selecteds("images/ch3.png", "The Rebel", 3, false);
const selectP4 = new selecteds("images/ch4.png", "The Saviour", 4, false);
const selectP5 = new selecteds("images/ch5.png", "The Diva", 5, false);

let selecItem = [];
selecItem.push(selectP1, selectP2, selectP3, selectP4, selectP5);
//localstorage set
localStorage.clear();
localStorage.setItem("select", JSON.stringify(selecItem));
console.log(localStorage);

function personSelect() {
    let listSelect = "";

    selecItem.forEach((person) => {
        if (!person.isInSall) {
            listSelect += ` <div class="">

                    <button class="btn" onclick="selectOne(${person.id})">  <img class="selectCharacter" src="${person.img} "/></button>
                    <p class="text">${person.name}</p>
</div>`;
        }
    });
    document.getElementById("root").innerHTML = listSelect;
}
//localstorage get
localStorage.getItem("select", JSON.stringify(selecItem)[0]);
console.log(selecItem);

function selectOne(id) {
    let index = selecItem.findIndex((item) => item.id == id);
    console.log(index);
    if (selecItem[index].isInSall) {
        /*  console.log("imposible add"); */
    } else {
        selecItem[index].isInSall = true;

        listSelect = "";

        personSelect();
    }
}
