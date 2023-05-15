(function () {
  [...document.querySelectorAll('.control')].forEach((button) => {
    button.addEventListener('click', function () {
      document.querySelector('.active-btn').classList.remove('active-btn');
      this.classList.add('active-btn');
      document.querySelector('.active').classList.remove('active');
      document.getElementById(button.dataset.id).classList.add('active');
    });
  });
  document.querySelector('.theme-btn').addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
  });
})();

//faq

const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach((question) => {
  question.addEventListener('click', () => {
    // закрытие всех ответов, кроме текущего
    faqQuestions.forEach((otherQuestion) => {
      if (otherQuestion !== question) {
        otherQuestion.classList.remove('active');
        const otherAnswer = otherQuestion.nextElementSibling;
        otherAnswer.style.display = 'none';
      }
    });

    question.classList.toggle('active');
    const answer = question.nextElementSibling;
    if (question.classList.contains('active')) {
      answer.style.display = 'block';
    } else {
      answer.style.display = 'none';
    }
  });
});
