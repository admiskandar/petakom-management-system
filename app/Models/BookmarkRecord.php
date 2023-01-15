<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkRecord extends Model
{
    use HasFactory;

    protected $table = 'bookmarks';

    protected $fillable = [
        'bulletin_id',
        'user_id',
        // 'bulletin_category',
        // 'bulletin_date',
        // 'bulletin_tag',
        // 'bulletin_excerpt',
        // 'bulletin_detail',
        // 'bulletin_pdf',
        // 'bulletin_image',
        // 'bulletin_video',
        // 'bulletin_link',
    ];

    public function bulletin()
    {
        return $this->belongsTo(BulletinRecord::class);
    }
}
