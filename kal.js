const kwd = {
    bokk : document.querySelector(".bokk"),
    btnk : document.querySelector(".btnk"),
    wynikk : document.querySelector(".wynikk"),

    klik: function(){
        this.wynikk.innerText = this.bokk.value * this.bokk.value;
        this.btnk.addEventListener('click', this.klik.bind(kwd));
    }

}

kwd.klik();


const trj = {
    bokt : document.querySelector(".bokt"),
    wyst : document.querySelector(".wyst"),
    btnt : document.querySelector(".btnt"),
    wynikt : document.querySelector(".wynikt"),

    klik: function(){
        this.wynikt.innerText = (this.bokt.value * this.wyst.value) / 2;
        this.btnt.addEventListener('click', this.klik.bind(trj));
    }
}

trj.klik();

const prt = {
    boka : document.querySelector(".boka"),
    bokb : document.querySelector(".bokb"),
    btnr : document.querySelector(".btnr"),
    wynikr : document.querySelector(".wynikr"),

    klik: function(){
        this.wynikr.innerText = this.boka.value * this.bokb.value;
        this.btnr.addEventListener('click', this.klik.bind(prt));
    }

}  

prt.klik();

