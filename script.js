function setLanguage(lang) {
  if (lang === 'en') {
    document.documentElement.lang = 'en';
    document.documentElement.dir = 'ltr';
    document.getElementById('company-name').innerText = "Al-Muslimani & Al-Hakawati";
    document.getElementById('slogan').innerText = "Trusted Manufacturer in Amman";
  } else {
    document.documentElement.lang = 'ar';
    document.documentElement.dir = 'rtl';
    document.getElementById('company-name').innerText = "المسلماني والحكواتي";
    document.getElementById('slogan').innerText = "مصنع موثوق في عمان";
  }
}
