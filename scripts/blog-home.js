jQuery(document).ready(function() { 

    var blogs = jQuery("div.random-post");
    var blogIndex = -1;

    function showNextBlog() {
        ++blogIndex;
        blogs.eq(blogIndex % blogs.length).fadeIn(0).delay(10000).fadeOut(0, showNextBlog);
    }

    showNextBlog();

})();