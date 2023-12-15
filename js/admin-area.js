setTimeout(() => {
    const orderAdminPageData = document.querySelectorAll("#order_line_items table td p")
    const orderAdminPageDataLabel = document.querySelectorAll("#order_line_items table tr")
    console.log(orderAdminPageData)

    orderAdminPageData.forEach((element, index) => {
        console.log("helo")

        if (element.innerText === "0 (×0L)") {
            element.style.display = "none"
            orderAdminPageDataLabel[index + 1].style.display = "none"
        }
    })


}, );