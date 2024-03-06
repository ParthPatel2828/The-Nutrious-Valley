$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

window.onscroll = function () {
myFunction();
};

var navbar = document.querySelector('.navbar');
var sticky = 80;

function myFunction() {
if (window.pageYOffset >= sticky) {
  navbar.classList.add('sticky');
} else {
  navbar.classList.remove('sticky');
}
}

function calculateBMI() {
  var name = document.getElementById('name').value;
  var phone = document.getElementById('phone').value;
  var age = parseFloat(document.getElementById('age').value);
  var weight = parseFloat(document.getElementById('weight').value);
  var height = parseFloat(document.getElementById('height').value);
  var bmi = weight / Math.pow(height / 100, 2);

  // Validate inputs only when the user clicks submit
  if (!name.trim() || !isValidPhoneNumber(phone) || isNaN(age) || isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
      alert("Please fill in all required fields with valid values.");
      return false;
  }

  // Display BMI result
  var bmiCategory;
  if (bmi < 18.5) {
      bmiCategory = "Underweight";
  } else if (bmi < 24.9) {
      bmiCategory = "Normal Weight";
  } else if (bmi < 29.9) {
      bmiCategory = "Overweight";
  } else {
      bmiCategory = "Obese";
  }

  var resultMessage = name + "<br> Your BMI is: " + bmi.toFixed(2) + "<br>Your BMI Category: " + bmiCategory;
  document.getElementById('bmiResult').innerHTML = resultMessage;
document.getElementById('weight').value = '';
document.getElementById('height').value = '';
document.getElementById('age').value = '';
document.getElementById('phone').value = '';
document.getElementById('name').value = '';
document.getElementById('bmiResult').classList.remove('hidden');
 
  $('#bmiResult').html(resultMessage);
  $('#bmiResultSection').removeClass('hidden');

  
  $.ajax({
    type: "POST",
    url: calculateBmiUrl,
    contentType: 'application/json',
    data: JSON.stringify({
       name: name,
       phone: phone,
       age: age,
       weight: weight,
       height: height,
       bmi: bmi.toFixed(2), 
       bmi_category: bmiCategory,
       _token: '{{ csrf_token() }}'
    }),
    success: function (response) {
       console.log(response.success);
    },
    error: function (error) {
       console.error('Error storing BMI Record', error);
       console.log(error.responseText); 
       console.log(error.status);       
       console.log(error.statusText);
    }
  });
  $.ajax({
    type: "POST",
    url: "http://localhost:8000/mail",  
    contentType: 'application/json',
    data: JSON.stringify({
        email: 'parthdishant123@gmail.com',  // Replace with the desired email address
        subject: 'New BMI Record',
        message: 'Name: ' + name + '\nBMI: ' + bmi.toFixed(2) + '\nCategory: ' + bmiCategory,
    }),
    success: function (response) {
        console.log(response);
    },
    error: function (error) {
        console.error('Error sending email', error);
    }
});

  return false; 
}

function isValidPhoneNumber(phone) {
  
  var cleanPhone = phone.replace(/[^\d]/g, '');
 return /^\d{10}$/.test(cleanPhone);
}


document.addEventListener("DOMContentLoaded", function() {
var backToTopButton = document.getElementById("back-to-top");

window.addEventListener("scroll", function() {
  backToTopButton.style.display = window.scrollY > 260 ? "flex" : "none";
});

backToTopButton.addEventListener("click", function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: "smooth" });
});
});

function isElementInViewport(el) {
var rect = el.getBoundingClientRect();
return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
);
}

function handleScroll() {
var pElement = document.querySelector('.animated-p');

if (pElement && isElementInViewport(pElement)) {
  pElement.classList.add('fade-in');
  window.removeEventListener('scroll', handleScroll);
}
}

window.addEventListener('scroll', handleScroll);

function scrollToSection(sectionId) {
var section = document.querySelector(sectionId);
if (section) {
  window.scrollTo({
    top: section.offsetTop,
    behavior: 'smooth'
  });

  var dropdownToggle = document.querySelector('.navbar-toggler');
  var bootstrapDropdown = document.querySelector('.navbar-collapse');

  if (dropdownToggle && bootstrapDropdown.classList.contains('show')) {
    dropdownToggle.click();
  }
}
}

$(document).ready(function() {
var imageSources = [
  'front-end/img/9762674-removebg-preview.png',
  'front-end/img/6428212-removebg-preview.png',
  'front-end/img/3972991-removebg-preview.png',
  'front-end/img/3992739_prev_ui.png',
  'front-end/img/11.png'
];

var currentIndex = 0;

function updateSlider() {
  $('.slider-image').attr('src', imageSources[currentIndex]);
  currentIndex = (currentIndex + 1) % imageSources.length;
  setTimeout(updateSlider, 3000);
}
$('.slider-image').css({ 'width': 'auto', 'height': 'auto' });

updateSlider();
});
document.addEventListener('DOMContentLoaded', function () {
  // Select the countdown elements
  const countdownElements = document.querySelectorAll('.card-text');

  // Function to start countdown
  function startCountdown(element, targetValue) {
    let currentValue = 0;

    const updateCounter = () => {
      if (currentValue <= targetValue) {
        element.innerText = currentValue + '+';
        currentValue++;
        setTimeout(updateCounter, 8);
      }
    };

    updateCounter();
  }

  // Function to check if an element is in the viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Function to handle scroll events
  function handleScroll() {
    countdownElements.forEach(element => {
      if (isInViewport(element) && !element.classList.contains('countdown-started')) {
        element.classList.add('countdown-started');
        const targetValue = parseInt(element.getAttribute('data-target'));
        startCountdown(element, targetValue);
      }
    });
  }

  // Add scroll event listener
  window.addEventListener('scroll', handleScroll);

  // Initial check on page load
  handleScroll();
});