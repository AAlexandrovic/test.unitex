<?php
//подключаем бд
include $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';
$link = sqlConnect();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Тестовое задание</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,100;1,200&display=swap');

  @media (max-width: 576px) {
    .title {
      max-width: 276px;
      max-height: 64px;
      font-family: Raleway;
      font-size: 25px;
      font-weight: 600;
      line-height: 32px;
      letter-spacing: 0em;
      text-align: left;
    }
  }

  @media (max-width: 576px) {
    .modal-btn {
      margin-top: 15px;
      margin-bottom: 15px;
      width: 100%;
      height: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-radius: 10px;
      background-color: #4C9BE4;
      font-family: Raleway;
      font-size: 14px;
      font-weight: 700;
      line-height: 16px;
      letter-spacing: 0.02em;
      text-align: center;
    }
  }

  @media(min-width: 576px) {
    .modal-btn {
      width: 127px;
      height: 40px;
      border-radius: 10px;
      background-color: #4C9BE4;
      font-family: Raleway;
      font-size: 14px;
      font-weight: 700;
      line-height: 16px;
      letter-spacing: 0.02em;
      text-align: center;
  }
  }
  @media (max-width: 576px) {
    #myModalLabel p{
    min-width: 202px;
    min-height: 20px;
    font-family: Raleway;
    font-size: 17px;
    font-weight: 600;
    line-height: 20px;
    text-align: center;
  }
  }
  @media (min-width: 768px) {
    #myModalLabel p{
    min-width: 202px;
    min-height: 20px;
    font-family: Raleway;
    font-size: 17px;
    font-weight: 600;
    line-height: 20px;
    text-align: left;
  }
  }

  @media (min-width: 300px) and (max-width:767px) {
    .modal-header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .h-image {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .close {
      justify-content: end;
      align-items: end;
    }
  }

  @media (min-width: 1300px) and (max-width: 2700px) {
    .contact span {
      padding-left: 100px;
    }

    .city span {
      padding-left: 100px;
    }
  }

  button:focus {
    outline: none;
  }

  .contact span::before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url('/items/1.svg');
    background-size: cover;
    margin-right: 10px;
  }

  .number span::before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url('/items/2.svg');
    background-size: cover;
    margin-right: 10px;
  }

  .city span::before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url('/items/4.svg');
    background-size: cover;
    margin-right: 10px;
  }

  .mail span::before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url('/items/3.svg');
    background-size: cover;
    margin-right: 10px;
  }

  body {
    font-family: 'Raleway', sans-serif;
    background-color: #F6F5F5;
    ;
  }

  .container {
    max-width: 1400px;
  }

  .top {
    margin-top: 145px;
  }

  h1 {
    max-width: 1400px;
    max-height: 45px;
  }

  .time {
    margin-left: 10%;
    margin-top: 50px;
  }

  .text1 {
    width: 31px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }

  .text2 {
    width: 32px;
    height: 34px;
    font-family: Raleway;
    font-size: 26px;
    font-weight: 500;
    line-height: 34px;
    letter-spacing: 0em;
    text-align: left;
  }

  .text3 {
    font-family: Raleway;
    font-size: 13px;
    font-weight: 400;
    line-height: 17px;
    letter-spacing: 0em;
    text-align: left;
    width: 42px;
    height: 17px;
    color: #7B7B7B;
  }

  .button {
    width: 376px;
    height: 60px;
    margin-top: 50px;
    border-radius: 10px;
    gap: 10px;
    background-color: #4C9BE4;
    border: none;
    margin-bottom: 50px;
  }

  .button text {
    width: 165px;
    height: 26px;
    font-family: Raleway;
    font-size: 20px;
    font-weight: 600;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: left;
    color: #FFFFFF;
  }

  #block {
    max-width: 1, 400px;
    min-height: 108px;
    border-radius: 10px;
    background-color: #FFFFFF;
    margin-bottom: 20px;
  }

  .rectangle {
    width: 137px;
    height: 122px;
    background-color: #E1EFFB;
  }

  #myForm {
    padding-bottom: 25px;
    padding-top: 25px;
  }


  .item1 {
    padding: 30px;
    width: 137px;
    height: 108px;
    background-color: #E1EFFB;
  }

  .item2 {
    max-width: 941px;
    height: 48px;
    row-gap: 110px;
    column-gap: 110px;
  }

  .item3 {
    width: 200px;
    height: 19px;
    padding: 10px;
  }

  .contact {
    min-width: 200px;
    min-height: 19px;
    margin: 10px;
  }

  .contact span {
    min-width: 129px;
    min-height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .contact text {
    min-width: 37px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .city {
    min-width: 135px;
    min-height: 19px;
    margin: 10px
  }

  .city span {
    min-width: 55px;
    min-height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .city text {
    min-width: 37px;
    height: 19px;
    font-family: Raleway;
    padding-left: 10px;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .number {
    min-width: 200px;
    min-height: 19px;
    margin: 10px;
  }

  .number span {
    min-width: 129px;
    min-height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .number text {
    min-width: 37px;
    height: 19px;
    font-family: Raleway;
    padding-left: 10px;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .mail {
    min-width: 191px;
    min-height: 19px;
    margin: 10px
  }

  .mail span {
    min-width: 50px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }

  .mail text {
    padding-left: 10px;
    min-width: 105px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;

  }

  .item3 span {
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  .item3 text {
    width: 37px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
    color: #161616;
  }

  #myModal {
    min-height: 629px;
    border-radius: 20px;
    border: 10px, 0px, 0px, 0px;
    padding-right: 1% !important;
  }

  .required-field {
    color: red;
    margin-left: 5px;
    font-size: 1.2em;
  }

  .error {
    min-width: 126px;
    min-height: 17px;
    font-family: Raleway;
    font-size: 13px;
    font-weight: 500;
    line-height: 17px;
    letter-spacing: 0em;
    text-align: left;
    color: #EA3232;
  }

  .modal-header {
    border-top: 10px solid rgba(76, 155, 228, 1);
    background-color: #F7F7F7;
    min-height: 110px;
  }

  #block:active {
    border: 3px solid #4C9BE4;
  }

  #block:active .rectangle {
    background-color: rgba(76, 155, 228, 1);
  }

  #block:active .sm-rectangle {
    background-color: rgba(76, 155, 228, 1);
  }
  #block:active #firstForm {
    background-color: rgba(76, 155, 228, 1);
  }
  #firstForm {
    background-color: #E1EFFB;
  }
  #block:hover {
    cursor: pointer;
  }

  .modal-png {
    width: 50px;
    height: 50px;
    border-radius: 500px;
    background-color: #4C9BE4;
  }

  .modal-png {
    padding-top: 15px;
  }

  .label text {
    min-width: 129px;
    min-height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }

  .message {
    max-width: 370px;
    max-height: 68px;
    font-family: Raleway;
    font-size: 13px;
    font-weight: 500;
    line-height: 17px;
    letter-spacing: 0em;
    text-align: left;
  }

  .message text {
    color: rgba(76, 155, 228, 1)
  }

  .rectangle span {
    margin-top: 25px;
    max-width: 75px;
    min-height: 48px;
    gap: 10;
  }

  .rectangle text {
    width: 25px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }

  .rectangle p {
    width: 75px;
    min-height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }

  .sm-rectangle {
    background-color: #E1EFFB;
    height: 122px;
    padding-top: 60px
  }

  .sm-rectangle text:nth-of-type(2) {
    width: 100px;
    min-height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 400;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }

  .sm-rectangle text:nth-of-type(1) {
    width: 25px;
    height: 19px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    line-height: 19px;
    letter-spacing: 0em;
    text-align: left;
  }
</style>
<body>
  <div class="container">
    <div class="container top">
      <h1 class="text-center title">Заявки на вызов менеджера</h1>
      <!-- Выводим количество заявко через ajax запрос -->
      <div class="row justify-content-center time" id="test">
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal"><text>Добавить заявку</text></button>
      </div>
    </div>
    <!-- в этом контейнере выводим заявки -->
    <div class="container" id="result">
    </div>
    <!-- Модальное окно -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <button type="button" class="close d-md-none" data-dismiss="modal" aria-label="Close"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.420848 0.420873C0.715242 0.126473 1.19255 0.126473 1.48694 0.420873L19.5792 18.5134C19.8736 18.8078 19.8736 19.2852 19.5792 19.5796C19.2848 19.874 18.8075 19.874 18.5131 19.5796L0.420848 1.48699C0.126454 1.19259 0.126454 0.715273 0.420848 0.420873Z" fill="#666666" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5791 0.420873C19.2847 0.126473 18.8074 0.126473 18.513 0.420873L0.420746 18.5134C0.126353 18.8078 0.126353 19.2852 0.420747 19.5796C0.71514 19.874 1.19245 19.874 1.48684 19.5796L19.5791 1.48699C19.8735 1.19259 19.8735 0.715273 19.5791 0.420873Z" fill="#666666" />
              </svg></button>
            <div class="col-md-2 h-image">
              <div class=" d-flex justify-content-center modal-png "><svg padding-top="14" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.50573 16.7406C8.35493 15.5953 8.26539 14.4407 7.9685 13.3158C7.90488 13.0759 7.82712 12.84 7.77293 12.5977C7.69674 12.2568 7.81299 12.082 8.15386 12.071C8.71623 12.0537 9.27938 12.0522 9.84175 12.071C10.2101 12.0835 10.3554 12.3069 10.2227 12.7059C9.85039 13.8292 9.6721 14.987 9.55507 16.1574C9.53229 16.3847 9.52208 16.6136 9.50401 16.8683C9.71529 16.7939 9.72865 16.6332 9.78441 16.5124C10.3719 15.2441 10.9618 13.9766 11.5304 12.7004C11.6797 12.3657 11.8634 12.2646 12.2295 12.343C15.2031 12.9756 17.334 15.2198 17.8406 18.2856C17.9065 18.6846 17.9584 19.0867 17.9921 19.4888C18.0283 19.9223 17.9513 19.9968 17.5193 19.9984C16.6294 20.0015 15.7395 19.9992 14.8496 19.9992C10.086 19.9992 5.32161 19.9992 0.557985 19.9992C0.0490271 19.9992 -0.0224468 19.9474 0.00504315 19.5273C0.12757 17.6695 0.664018 15.9622 1.90735 14.53C2.96532 13.3111 4.31783 12.5915 5.87848 12.2285C6.18401 12.1572 6.32696 12.2826 6.44634 12.5484C7.0252 13.8347 7.6182 15.1148 8.20727 16.3964C8.26539 16.5234 8.33294 16.6465 8.39577 16.7719C8.4319 16.7617 8.46882 16.7507 8.50495 16.7406H8.50573Z" fill="white" />
                  <path d="M9.00055 9.96548C6.27511 9.96626 3.99187 7.67968 4.00758 4.96275C4.02329 2.25209 6.28925 0 9.00055 0C11.7307 0 14.01 2.28423 13.9927 5.00194C13.9762 7.71731 11.7158 9.96469 9.00055 9.96548Z" fill="white" />
                </svg></div>
            </div>
            <h4 class="modal-title col-md-8" id="myModalLabel" style="padding-top:15px">
              <p>Вызвать менеджера</p>
            </h4>
            <button type="button" class="col-md-2 d-none d-md-block" data-dismiss="modal" style="border: none; background-color: #F7F7F7"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.420848 0.420873C0.715242 0.126473 1.19255 0.126473 1.48694 0.420873L19.5792 18.5134C19.8736 18.8078 19.8736 19.2852 19.5792 19.5796C19.2848 19.874 18.8075 19.874 18.5131 19.5796L0.420848 1.48699C0.126454 1.19259 0.126454 0.715273 0.420848 0.420873Z" fill="#666666" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5791 0.420873C19.2847 0.126473 18.8074 0.126473 18.513 0.420873L0.420746 18.5134C0.126353 18.8078 0.126353 19.2852 0.420747 19.5796C0.71514 19.874 1.19245 19.874 1.48684 19.5796L19.5791 1.48699C19.8735 1.19259 19.8735 0.715273 19.5791 0.420873Z" fill="#666666" />
              </svg></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid justify-content-center">
              <form id="Form">
                <div class="form-group">
                  <label for="name" class="label"><text>Контактное лицо:</text><span class="required-field">*</span></label>
                  <input type="text" class="form-control" id="name" name="name">
                  <span class="error" id="name-error"></span>
                </div>
                <div class="form-group">
                  <label for="number" class="label"><text>Ваш номер телефона:</text><span class="required-field">*</span></label>
                  <input type="tel" class="form-control" id="number" name="number">
                  <span class="error" id="number-error"></span>
                </div>
                <div class="form-group">
                  <label for="mail" class="label"><text>E-mail:</text><span class="required-field">*</span></label>
                  <input type="text" class="form-control" id="mail" name="mail">
                  <span class="error" id="mail-error"></span>
                </div>
                <div class="form-group">
                  <label for="city" class="label"><text>Город:</text><span class="required-field">*</span></label>
                  <input type="text" class="form-control" id="city" name="city">
                  <span class="error" id="city-error"></span>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-start message">Нажимая кнопку «Отправить заявку» вы подтверждаете свое согласие на обработку персональных данных и ознакомление с <text>условиями политики обработки персональных данных.</text></p>
                  </div>
                </div>
                <div>
                  <input type="hidden" name="create" value="x">
                </div>
                <button type="submit" class="btn btn-primary modal-btn">Отправить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      //Получаем данные из бд и выводим их на экран
      setInterval(function() {
        $.ajax({
          url: "/api/application.php",
          type: "GET",
          dataType: "json",
          success: function(data) {
            var html = "";
            $.each(data, function(key, value) {
              html += '   <div class="row align-items-center" id="block">' +
                '<div class="col-1 d-none d-md-block  rectangle" style="padding-top:10px;"><div class="d-flex justify-content-center align-items-center">' +
                '<span ><text> №' + value.id + '</text><p style="padding-top: 10px">' + value.date + '</p></span>' +
                '</div></div>' +
                '<div class="col-9 col-md-9 col-sm-9 d-md-none justify-content-start sm-rectangle">' +
                '<span><text style="padding-left: 15px"> №' + value.id + '</text><text style="padding-left: 15px">' + value.date + '</text></span>' +
                '</div>' +
                '<div class=" col-3 col-md-3 col-sm-3 d-flex align-items-center justify-content-end d-md-none rectangle">' +
                '<form id="myForm">' +
                '<input type="hidden" name="id" value="' + value.id + '">' +
                '<input type="hidden" name="delete">' +
                '<button type="submit" id="firstForm" style="border: none;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<path fill-rule="evenodd" clip-rule="evenodd" d="M0.420848 0.420873C0.715242 0.126473 1.19255 0.126473 1.48694 0.420873L19.5792 18.5134C19.8736 18.8078 19.8736 19.2852 19.5792 19.5796C19.2848 19.874 18.8075 19.874 18.5131 19.5796L0.420848 1.48699C0.126454 1.19259 0.126454 0.715273 0.420848 0.420873Z" fill="#666666"/>' +
                '<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5791 0.420873C19.2847 0.126473 18.8074 0.126473 18.513 0.420873L0.420746 18.5134C0.126353 18.8078 0.126353 19.2852 0.420747 19.5796C0.71514 19.874 1.19245 19.874 1.48684 19.5796L19.5791 1.48699C19.8735 1.19259 19.8735 0.715273 19.5791 0.420873Z" fill="#666666"/>' +
                '</svg></button>' +
                '</form>' +
                '</div>' +
                '<div class="col-md-4 col-sm-12 ">' +
                '<div class="col justify-content-start contact"><span>Контактное лицо:</span><br class="d-md-none" ><text style="padding-left: 10px;">' + value.name + '</text></div>' +
                '<div class="col justify-content-start city"><span>Город:</span><br class="d-md-none" ><text>' + value.city + '</text></div>' +
                '</div>' +
                '<div class="col-md-4 col-sm-12 ">' +
                '<div class="col justify-content-start number"><span>Номер телефона:</span><br class="d-md-none" ><text>' + value.number + '</text></div>' +
                '<div class=" col justify-content-start mail"><span>E-mail:</span><br class="d-md-none" ><text>' + value.mail + '</text></div>' +
                '</div>' +
                '<div class="col-md-3 d-none d-md-block">' +
                '<div class="row justify-content-end">' +
                '<form id="myForm" style="padding-right: 10px;">' +
                '<input type="hidden" name="id" value="' + value.id + '">' +
                '<input type="hidden" name="delete">' +
                '<button type="submit" style="border:none; background-color: #FFFFFF;"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<path fill-rule="evenodd" clip-rule="evenodd" d="M0.420848 0.420873C0.715242 0.126473 1.19255 0.126473 1.48694 0.420873L19.5792 18.5134C19.8736 18.8078 19.8736 19.2852 19.5792 19.5796C19.2848 19.874 18.8075 19.874 18.5131 19.5796L0.420848 1.48699C0.126454 1.19259 0.126454 0.715273 0.420848 0.420873Z" fill="#666666"/>' +
                '<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5791 0.420873C19.2847 0.126473 18.8074 0.126473 18.513 0.420873L0.420746 18.5134C0.126353 18.8078 0.126353 19.2852 0.420747 19.5796C0.71514 19.874 1.19245 19.874 1.48684 19.5796L19.5791 1.48699C19.8735 1.19259 19.8735 0.715273 19.5791 0.420873Z" fill="#666666"/>' +
                '</svg></button>' +
                '</form>' +
                '</div>' +
                '</div>' +
                '</div>';
            });
            $("#result").html(html);
          }
        });
      }, 1000);  // каждую секунду повторяем запрос

      // тоже самое но для вывода времени
      setInterval(function() {
        $.ajax({
          url: "/api/time.php",
          type: "GET",
          dataType: "json",
          success: function(data) {
            var html = "";
            $.each(data, function(key, value) {
              html += '<div class="col-4 col-md-2">' +
                '<span class="row text1">' + value.month_year + '</span>' +
                '<span class="row text2">' + value.message_count + '</span>' +
                '<span class="row text3">' + value.end + '</span>' +
                '</div>'
            });
            $("#test").html(html);
          }
        });
      }, 1000); // так-же каждую секунду обновляем запрос
      
      // Скрипт удаления заявки из бд
      $('#result').on('submit', '#myForm', function(e) {
        e.preventDefault(); 
        var formData = $(this).serialize(); 
        $.ajax({
          type: 'POST', 
          url: '/api/application.php', 
          data: formData, 
          success: function(response) {
            console.log(response); 
          }
        });
      });

      //Валидация формы
      $('#Form').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var mail = $('#mail').val();
        var number = $('#number').val();
        var city = $('#city').val();

        var reg = /^\w+([\.-]?\w+)*@(((([a-z0-9]{2,})|([a-z0-9][-][a-z0-9]+))[\.][a-z0-9])|([a-z0-9]+[-]?))+[a-z0-9]+\.([a-z]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/i;
        var error = false;
        var formData = $(this).serialize(); // получаем данные формы в виде строки
        if (name.length == 0) {
          $('#name').addClass('is-invalid');
          $('#name-error').text('Заполните это поле');
          error = true;
        } else {
          $('#name').removeClass('is-invalid');
          $('#name-error').text('');
        }

        if (mail.length == 0) {
          $('#mail').addClass('is-invalid');
          $('#mail-error').text('Заполните это поле');
          error = true;
        } else if (!reg.test(mail)) {
          $('#mail').addClass('is-invalid');
          $('#mail-error').text('Неверный формат');
        } else {
          $('#mail').removeClass('is-invalid');
          $('#mail-error').text('');
        }

        if (number.length == 0) {
          $('#number').addClass('is-invalid');
          $('#number-error').text('Заполните это поле');
          error = true;
        } else {
          $('#number').removeClass('is-invalid');
          $('#number-error').text('');
        }

        if (city.length == 0) {
          $('#city').addClass('is-invalid');
          $('#city-error').text('Заполните это поле');
          error = true;
        } else {
          $('#city').removeClass('is-invalid');
          $('#city-error').text('');
        }
        //Отправляем запрос
        if (!error) {
          $.ajax({
            url: '/api/application.php',
            type: 'POST',
            data: formData,
            success: function(response) {
              console.log(response);
              $('#myModal').modal('hide'); // скрываем модальное окно после отправки формы
            },
            error: function(xhr, status, error) {
              console.log(error);
            }
          });
        }
      });
      $('#myModal').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset(); //очищаем модальное окно если его закроют
        $('.is-invalid').removeClass('is-invalid');
        $('.error').text('');
      });
    });
  </script>
</body>

</html>