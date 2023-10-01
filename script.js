function scrollToTop() {
  window.scrollTo({
      top:0,
      behavior: "smooth"
  })
}

//skillの詳細表示
// 例: マウスオーバーで詳細を表示
document.addEventListener("DOMContentLoaded", function() {
const skillCards = document.querySelectorAll('.skill-card');
skillCards.forEach(card => {
  card.addEventListener('mouseover', function() {
    // 詳細を表示する処理
  });
});
});