"use strict"

let login = prompt("Введите логин");
let password;

switch (login) {
    case "Админ":
        password = prompt("Введите пароль");

        switch (password) {
            case "Черный принц":
                alert("Добро пожаловать");
                break;
            case null:
                alert("Вход отменен");
                break;
            default:
                alert("Пароль неверен");
        }

        break;
    case null:
        alert("Вход отменен");
        break;
    default:
        alert("Я вас не знаю");
}