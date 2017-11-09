<?php

// Index
Breadcrumbs::register('index', function ($breadcrumbs) {
    $breadcrumbs->push('首页', route('frontend.web.index'));
});

Breadcrumbs::register('category', function ($breadcrumbs, $category) {
    if ($category->isTopCategory()) {
        // 是顶级分类
        $breadcrumbs->parent('index');
    } else {
        $breadcrumbs->parent('category', $category->parent);
    }

    $breadcrumbs->push($category->cate_name, route('frontend.web.category.show', $category->cate_slug));
});

Breadcrumbs::register('post', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('category', $post->category);
    // 这里前端要求显示'正文'而不是显示文章标题，所以这里暂时改成'正文'
    $breadcrumbs->push('正文' , route('frontend.web.post.show', $post->slug));
});
