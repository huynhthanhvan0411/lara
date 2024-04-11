<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    /**
 * Determine whether the user can view any posts.
 *
 * @param  \App\Models\User  $user
 * @return mixed
 */
public function viewAny(User $user)
{
    return true; // Tất cả người dùng có thể xem bài viết
}

/**
 * Determine whether the user can view the post.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Post  $post
 * @return mixed
 */
public function view(User $user, Post $post)
{
    if ($user->hasRole('admin') || $post->status === '1') {
        return true; // Admin có quyền xem tất cả bài viết, còn user chỉ có thể xem bài viết đã được xuất bản
    }

    return false;
}

/**
 * Determine whether the user can update the post.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Post  $post
 * @return mixed
 */
public function update(User $user, Post $post)
{
    return $user->hasRole('admin'); // Chỉ admin có thể cập nhật bài viết
}

/**
 * Determine whether the user can delete the post.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Post  $post
 * @return mixed
 */
public function delete(User $user, Post $post)
{
    return $user->hasRole('admin'); // Chỉ admin có thể xóa bài viết
}

/**
 * Determine whether the user can restore the post.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Post  $post
 * @return mixed
 */
public function restore(User $user, Post $post)
{
    return $user->hasRole('admin'); // Chỉ admin có thể khôi phục bài viết
}

/**
 * Determine whether the user can permanently delete the post.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Post  $post
 * @return mixed
 */
public function forceDelete(User $user, Post $post)
{
    return $user->hasRole('admin'); // Chỉ admin có thể xóa vĩnh viễn bài viết
}

/**
 * Determine whether the user can review the post.
 *
 * @param  \App\Models\User  $user
 * @param  \App\Models\Post  $post
 * @return mixed
 */
public function review(User $user, Post $post)
{
    return !$user->hasRole('admin'); // User không phải là admin có thể xem xét bài viết
}

}