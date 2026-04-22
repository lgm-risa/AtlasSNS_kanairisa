<script>
  $(function(){
    $('.arrow').on("click", function () {
      $(this).closest('#menu-trigger').find('.accordion_menu').slideToggle();

      // 矢印の向き変える
      $(this).find('.arrow').toggleClass('arrow-top arrow-bottom');
    })
  });
</script>
