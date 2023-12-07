<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Donations extends Controller
{
    public function getAllMoneyProjects()
    {


        $info = DB::select('select donations.id as "bill_Id", donations.user_id, concat(users.first_name," ",users.last_name) as "Name", donations.category , donations.amount
from donations
inner join users on donations.user_id = users.id;');
        return view("MoneyDonationsInfo")->with("info", $info);
    }

    public function getAllGoodsProjects()
    {


        $info = DB::select('select goods_donations.id as "G_id", goods_donations.user_id, concat(users.first_name," ",users.last_name) as "Name", goods_donations.category , goods_donations.description
from goods_donations
inner join users on goods_donations.user_id = users.id;');
        return view("GoodDonationInfo")->with("info", $info);
    }

}
