let header_elements_info = document.querySelectorAll('.header-translate')

const observer = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting)
            entry.target.classList.add('visible')
        if(!entry.isIntersecting)
            entry.target.classList.remove('visible')
    })
});

for(let i=0; i<header_elements_info.length; i++){
    observer.observe(header_elements_info[i]);

}




$(document).on('click', '.horizontal-timeline-node',function (node) {

    let active_node = $('.horizontal-timeline-node.active')[0];

    if(active_node.getAttribute('data-id') !== node.currentTarget.getAttribute('data-id')){

        let next_content_id = node.currentTarget.getAttribute('data-id');
        let all_content = document.getElementsByClassName('timeline-selected-content')

        for(let i=0; i < all_content.length; i++){

            if(all_content[i].getAttribute('data-id') === next_content_id){

                all_content[i].classList.add('visible');
            }else if(all_content[i].classList.contains('visible')){

                all_content[i].classList.remove('visible');
            }

        }

        active_node.classList.remove('active');
        node.currentTarget.classList.add('active');



    }



})



