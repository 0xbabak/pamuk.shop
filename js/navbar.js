
//item1
let item_1_nav = document.getElementById("item-1-nav");
let item_1_nav_expand = document.getElementById("item-1-nav-expand");
showhidenav(item_1_nav, item_1_nav_expand)

//item2
let item_2_nav = document.getElementById("item-2-nav");
let item_2_nav_expand = document.getElementById("item-2-nav-expand");
showhidenav(item_2_nav, item_2_nav_expand)

//item3
let item_3_nav = document.getElementById("item-3-nav");
let item_3_nav_expand = document.getElementById("item-3-nav-expand");
showhidenav(item_3_nav, item_3_nav_expand)

//item4
let item_4_nav = document.getElementById("item-4-nav");
let item_4_nav_expand = document.getElementById("item-4-nav-expand");
showhidenav(item_4_nav, item_4_nav_expand)

//item5
let item_5_nav = document.getElementById("item-5-nav");
let item_5_nav_expand = document.getElementById("item-5-nav-expand");
showhidenav(item_5_nav, item_5_nav_expand)

//item6
let item_6_nav = document.getElementById("item-6-nav");
let item_6_nav_expand = document.getElementById("item-6-nav-expand");
showhidenav(item_6_nav, item_6_nav_expand)

function showhidenav(itemnav, itemexpand) {
    itemnav.addEventListener("click", () => {
        if (itemexpand.style.display = "none") {
            itemexpand.style.display = "block";
        } else {
            itemexpand.style.display = "none";
        }
    })
    itemnav.addEventListener("dblclick", () => {
        if (itemexpand.style.display = "block") {
            itemexpand.style.display = "none";
        } else {
            itemexpand.style.display = "block";
        }
    })
}