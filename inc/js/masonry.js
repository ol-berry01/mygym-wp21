jQuery(function ($) {
  $(".grid").isotope({
    itemSelector: ".grid-item",
    masonry: {
      columnWidth: 1,
      // columnWidth: 100,
      horizontalOrder: true
    }
  })
})
