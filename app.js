const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('disp');
});

 document.getElementById('showSubscriptionForm').addEventListener('click', function() {
  document.getElementById('subscriptionModal').style.display = 'block';
});

document.getElementsByClassName('close')[0].addEventListener('click', function() {
  document.getElementById('subscriptionModal').style.display = 'none';
});

window.onclick = function(event) {
  if (event.target == document.getElementById('subscriptionModal')) {
    document.getElementById('subscriptionModal').style.display = 'none';
  }
};
document.getElementById('subscription-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Зупиняємо стандартну поведінку форми

  // Отримуємо значення поля електронної пошти
  var email = document.getElementById('email').value;

  // Виконуємо код для підписки (можливо, відправка даних на сервер)

  // Показуємо повідомлення про підписку
  document.getElementById('subscriptionMessage').style.display = 'block';

  // Очищаємо поле введення електронної пошти
  document.getElementById('email').value = '';
});

document.getElementById('showSubscriptionForm').addEventListener('click', function() {
  document.getElementById('subscriptionFormContainer').style.display = 'block';
});

document.getElementById('adminLoginLink').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('adminLoginFormContainer').style.display = 'block';
});

document.getElementsByClassName('close')[0].addEventListener('click', function() {
  document.getElementById('subscriptionFormContainer').style.display = 'none';
});

document.getElementsByClassName('close')[1].addEventListener('click', function() {
  document.getElementById('adminLoginFormContainer').style.display = 'none';
});

window.onclick = function(event) {
  if (event.target == document.getElementById('subscriptionFormContainer')) {
    document.getElementById('subscriptionFormContainer').style.display = 'none';
  }
  if (event.target == document.getElementById('adminLoginFormContainer')) {
    document.getElementById('adminLoginFormContainer').style.display = 'none';
  }
};
