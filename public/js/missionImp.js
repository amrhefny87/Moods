function mounted() {
    this.times()
}

 let time = 150,

 function times() {
    let id = setInterval(() => {
        if (this.time === 0) {
            clearInterval(id);
        } else {
        this.time--
        }
    },1000)
}  