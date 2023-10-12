const CustomButton = {
    image: '../images/2.jpg',
    width: '200px',
    height: '200px',
    style: {
        border: 'dotted',
        borderColor: 'red'
    },
    render() {
        const button = document.createElement('button');
        button.style.width = this.width;
        button.style.height = this.height
        button.style.backgroundImage = `url(${this.image})`;
        document.body.appendChild(button);
        return button;
    }
}

// создаем функцию для добавления списка
function createSelect(button) {
    // создаем элемент select
    const select = document.createElement('select');

    // добавляем опции в select
    const options = ['../images/4.jpg', '../images/2.jpg', '../images/3.jpg'];
    options.forEach((option) => {
        const imageOption = document.createElement('option');
        imageOption.value = option;
        imageOption.text = option;
        select.appendChild(imageOption);
    });

    // добавляем select в body
    document.body.appendChild(select);

    // добавляем слушатель изменения select
    select.addEventListener('change', () => {
        CustomButton.image = select.value;
        button.style.backgroundImage = `url(${select.value})`;
    });
}

// создаем экземпляр CustomButton
const myButton = CustomButton;

// добавляем слушатель клика на кнопку
const button = myButton.render();
button.addEventListener('click', () => {
    createSelect(button);
});
