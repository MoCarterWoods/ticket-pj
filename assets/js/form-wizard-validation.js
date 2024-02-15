// const wizardVertical = document.querySelector(".wizard-vertical");

// if (typeof wizardVertical !== undefined && wizardVertical !== null) {
//   const wizardVerticalBtnNextList = [].slice.call(wizardVertical.querySelectorAll('.btn-next')),
//     wizardVerticalBtnPrevList = [].slice.call(wizardVertical.querySelectorAll('.btn-prev')),
//     wizardVerticalBtnSubmit = wizardVertical.querySelector('.btn-submit');

//   const numberedVerticalStepper = new Stepper(wizardVertical, {
//     linear: false
//   });
//   if (wizardVerticalBtnNextList) {
//     wizardVerticalBtnNextList.forEach(wizardVerticalBtnNext => {
//       wizardVerticalBtnNext.addEventListener('click', event => {
//         numberedVerticalStepper.next();
//       });
//     });
//   }
//   if (wizardVerticalBtnPrevList) {
//     wizardVerticalBtnPrevList.forEach(wizardVerticalBtnPrev => {
//       wizardVerticalBtnPrev.addEventListener('click', event => {
//         numberedVerticalStepper.previous();
//       });
//     });
//   }
//   if (wizardVerticalBtnSubmit) {
//     wizardVerticalBtnSubmit.addEventListener('click', event => {

//     });
//   }
// }