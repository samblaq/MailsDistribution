<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApkModel;
use App\ApkAcknowledgement;
use App\PendingMailsModel;
use App\AcknowledgedMails;

class GenericApkController extends Controller
{
    public function acknowledge(Request $request)
    {
	
		if($request->has('acknowledge')){

		
			if($oldie = ApkModel::where('id' , $request->id)->first()){
				
				$ack = new ApkAcknowledgement;

				$ack->TransactionCode = $request->TransactionCode;
				$ack->searchInput = $request->searchInput;
				$ack->recieverFullName = $request->recieverFullName;
				$ack->recieverBranch = $request->recieverBranch;
				$ack->recieverDepartment = $request->recieverDepartment;
				$ack->OfficerID = $request->auth;
				 
				if($ack->save()){
					$oldie->delete();
					return redirect()->back();
				}
				return redirect()->back();
				
			}
			
		}

		return redirect()->back();
		
	}

	public function acknowledgeMails(Request $request){

		if($request->has('acknowledge')){
			//return $request->all();
			if($pending = PendingMailsModel::where('id', $request->id)->first()){
				
				$acknowledge = new AcknowledgedMails;
				
				$acknowledge->TransactionCode = $request->TransactionCode;
				$acknowledge->Branch_From = $request->Branch_From;
				$acknowledge->Branch_To = $request->Branch_To;
				$acknowledge->package = $request->package;
				$acknowledge->deliverymode = $request->deliverymode;
				$acknowledge->deliveryperson = $request->deliveryperson;
				$acknowledge->IssuedBy = $request->IssuedBy;
				//$acknowledge->TransactionCode = $request->TransactionCode;
				if($acknowledge->save()){
					$pending->delete();
					return redirect('Mails/Progress');
				}
				return redirect()->back();
			}
		}
		return redirect()->back();
	}
		
}	