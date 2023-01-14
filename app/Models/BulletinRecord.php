<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulletinRecord extends Model
{
    use HasFactory;

    protected $table = 'bulletins';

    protected $fillable = [
        'bulletin_name',
        'bulletin_category',
        'bulletin_date',
        'bulletin_tag',
        'bulletin_excerpt',
        'bulletin_detail',
        'bulletin_pdf',
        'bulletin_image',
        'bulletin_video',
        'bulletin_link',
    ];
}
