class TypeWriter {
    constructor(txtElement, words, wait = 5000){
        this.txtElement = txtElement;
        this.words = words;

        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait,10);
        this.type();
        this.isDeleting = false;
    }

    type(){
        const current = this.wordIndex % this.words.length;

        const fullText = this.words[current];

        // Check if deleting
        if(this.isDeleting){
            // Remove last char
            this.txt = fullText.substring(0,this.txt.length -1);
        }else{
            // Add char
            this.txt = fullText.substring(0, this.txt.length +1);
        }

        // Set txt into html
        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

        let typeSpeed = 200;

        if(this.isDeleting){
            typeSpeed /= 2;
        }

        // When word completed
        if(!this.isDeleting && this.txt === fullText){
            // Pause
            typeSpeed = this.wait;

            this.isDeleting = true;
        }else if(this.isDeleting && this.txt === ''){
            this.isDeleting = false;

            this.wordIndex++;

            typeSpeed = 500;
        }

        setTimeout( () => this.type(), typeSpeed); 
    }
}

document.addEventListener('DOMContentLoaded',init);

function init(){
    const txtElement = document.getElementById('txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');

    //console.log(words);

    new TypeWriter(txtElement,words,wait)
}