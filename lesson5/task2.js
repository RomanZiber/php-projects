"use strict"

let login = prompt("Введите логин");
let password;

if (login === null) {
    alert("Вход отменен");

} else if (login !== "Админ") {
    alert("Я вас не знаю");

} else {//Ввели админ
    password = prompt("Введите пароль");
}

if (password === "Черный принц") {
    alert("Добро пожаловать!");

} else if (password !== null) {
    alert("Пароль неверен");

} else {
    alert("Вход отменён");
}