<?php

use Illuminate\Database\Seeder;
use App\Models\Resource;
use App\Models\Group;


class GroupResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_resource')->delete();
        DB::table('group_resource')->insert([
            //admin -> user
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','destroy')->first()->id],

            //admin -> theme
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','destroy')->first()->id],

            //admin -> subject
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','destroy')->first()->id],

            //admin -> discussion
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','destroy')->first()->id],

            //admin -> comment
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','destroy')->first()->id],

            //admin -> question
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','destroy')->first()->id],

            //admin -> response
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','destroy')->first()->id],

            //admin -> tag
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'admin')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','destroy')->first()->id],

            //specialist -> user
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','update')->first()->id],

            //specialist -> theme
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','show')->first()->id],

            //specialist -> subject
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','show')->first()->id],

            //specialist -> discussion
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','show')->first()->id],

            //specialist -> comment
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','update')->first()->id],

            //specialist -> question
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','show')->first()->id],

            //specialist -> response
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','destroy')->first()->id],

            //specialist -> tag
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'specialist')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','show')->first()->id],

            //moderator -> user
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','update')->first()->id],

            //moderator -> theme
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','show')->first()->id],

            //moderator -> subject
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','show')->first()->id],

            //moderator -> discussion
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','destroy')->first()->id],

            //moderator -> comment
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','destroy')->first()->id],

            //moderator -> question
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','destroy')->first()->id],

            //moderator -> response
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','show')->first()->id],

            //moderator -> tag
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'moderator')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','show')->first()->id],

            //guest -> user
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','update')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'user')->where('action','like','destroy')->first()->id],

            //guest -> theme
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'theme')->where('action','like','show')->first()->id],

            //guest -> subject
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'subject')->where('action','like','show')->first()->id],

            //guest -> discussion
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'discussion')->where('action','like','update')->first()->id],

            //guest -> comment
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'comment')->where('action','like','update')->first()->id],

            //guest -> question
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','create')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','store')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','show')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','edit')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'question')->where('action','like','update')->first()->id],

            //guest -> response
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'response')->where('action','like','show')->first()->id],

            //guest -> tag
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','index')->first()->id],
            ['group_id' => Group::where('name', 'like', 'guest')->first()->id,'resource_id' => Resource::where('name', 'like', 'tag')->where('action','like','show')->first()->id],

        ]);
    }
}