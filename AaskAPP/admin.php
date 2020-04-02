<?php $viewConfig=array('footer'=>'Layout/footer.php','header'=>'Layout/header.php','error_404'=>'errors/html/error_404.php','error_db'=>'errors/html/error_db.php','error_exception'=>'errors/html/error_exception.php','error_general'=>'errors/html/error_general.php','error_php'=>'errors/html/error_php.php','page_404'=>'errors/page_404.php','login'=>'login.php','VArea'=>'viewContainer/Area/VArea.php','VAreaTable'=>'viewContainer/Area/VAreaTable.php','VBranch'=>'viewContainer/Branch/VBranch.php','VBranchSearchTable'=>'viewContainer/Branch/VBranchSearchTable.php','VListofBranches'=>'viewContainer/Branch/VListofBranches.php','VNewBranchAdd'=>'viewContainer/Branch/VNewBranchAdd.php','VCall'=>'viewContainer/Call/VCall.php','VCallTable'=>'viewContainer/Call/VCallTable.php','VCertificate'=>'viewContainer/Certificate/VCertificate.php','VCertificateTable'=>'viewContainer/Certificate/VCertificateTable.php','Dashboard'=>'viewContainer/Dashboard.php','VFileManager'=>'viewContainer/FileManager/VFileManager.php','VLogo'=>'viewContainer/Logo/VLogo.php','VLogoTable'=>'viewContainer/Logo/lototable/VLogoTable.php','VMenu'=>'viewContainer/Menu/VMenu.php','VMenuTable'=>'viewContainer/Menu/VMenuTable.php','VNewMenu'=>'viewContainer/Menu/VNewMenu.php','VAddProject'=>'viewContainer/Prise/VAddProject.php','VEditPrice'=>'viewContainer/Prise/VEditPrice.php','VPrise'=>'viewContainer/Prise/VPrise.php','VPriseTable'=>'viewContainer/Prise/VPriseTable.php','VProject'=>'viewContainer/Project/VProject.php','VProjectTable'=>'viewContainer/Project/VProjectTable.php','VSliderTable'=>'viewContainer/Slider/VSliderTable.php','VSliders'=>'viewContainer/Slider/VSliders.php','VType'=>'viewContainer/Type/VType.php','VTypeTable'=>'viewContainer/Type/VTypeTable.php','C_DeleteNComments'=>'viewContainer/blog/C_DeleteNComments.php','VAddMoreURL'=>'viewContainer/blog/VAddMoreURL.php','VAllApprovComments'=>'viewContainer/blog/VAllApprovComments.php','VAllNewComments'=>'viewContainer/blog/VAllNewComments.php','VAllReports'=>'viewContainer/blog/VAllReports.php','VCategory'=>'viewContainer/blog/VCategory.php','VChangePassword'=>'viewContainer/blog/VChangePassword.php','VEditPost'=>'viewContainer/blog/VEditPost.php','VMoreURL'=>'viewContainer/blog/VMoreURL.php','VPostDataTable'=>'viewContainer/blog/VPostDataTable.php','VPostGUI'=>'viewContainer/blog/VPostGUI.php','VViewSingelComment'=>'viewContainer/blog/VViewSingelComment.php','VViewSingleCommentForApprove'=>'viewContainer/blog/VViewSingleCommentForApprove.php','V_EditLink'=>'viewContainer/blog/V_EditLink.php','V_AllRepotsTable'=>'viewContainer/blog/displayTable/V_AllRepotsTable.php','V_ApproveCommentTable'=>'viewContainer/blog/displayTable/V_ApproveCommentTable.php','V_CategoryTable'=>'viewContainer/blog/displayTable/V_CategoryTable.php','V_NewCommetTable'=>'viewContainer/blog/displayTable/V_NewCommetTable.php','V_PostDataTable'=>'viewContainer/blog/displayTable/V_PostDataTable.php','V_SearchDatafromTable'=>'viewContainer/blog/displayTable/V_SearchDatafromTable.php','V_UrlTable'=>'viewContainer/blog/displayTable/V_UrlTable.php','VListofPreBooking'=>'viewContainer/book/VListofPreBooking.php','VPreBooking'=>'viewContainer/book/VPreBooking.php','VJobApplication'=>'viewContainer/career/VJobApplication.php','VJobList'=>'viewContainer/career/VJobList.php','VListofJob'=>'viewContainer/career/VListofJob.php','VListofJobApplication'=>'viewContainer/career/VListofJobApplication.php','VNewJob'=>'viewContainer/career/VNewJob.php','VClient'=>'viewContainer/client/VClient.php','VClientTable'=>'viewContainer/client/VClientTable.php','VCreateEvent'=>'viewContainer/gallery/Event/VCreateEvent.php','VEventPhotoTable'=>'viewContainer/gallery/Event/VEventPhotoTable.php','VViewEventPhotos'=>'viewContainer/gallery/Event/VViewEventPhotos.php','VBulkofPhotoUploadView'=>'viewContainer/gallery/photo/VBulkofPhotoUploadView.php','VViewPhotoGallery'=>'viewContainer/gallery/photo/VViewPhotoGallery.php','VSendSub'=>'viewContainer/subscription/VSendSub.php','VSub'=>'viewContainer/subscription/VSub.php','VSubList'=>'viewContainer/subscription/VSubList.php','VTestimonials'=>'viewContainer/testimonials/VTestimonials.php','VTestimonialsTable'=>'viewContainer/testimonials/VTestimonialsTable.php','VSingleVideo'=>'viewContainer/youtube_video/VSingleVideo.php','welcome_message'=>'welcome_message.php'); $controllerAppConfig=array('footer'=>'Layout/footer.php','header'=>'Layout/header.php','error_404'=>'errors/html/error_404.php','error_db'=>'errors/html/error_db.php','error_exception'=>'errors/html/error_exception.php','error_general'=>'errors/html/error_general.php','error_php'=>'errors/html/error_php.php','page_404'=>'errors/page_404.php','login'=>'login.php','VArea'=>'viewContainer/Area/VArea.php','VAreaTable'=>'viewContainer/Area/VAreaTable.php','VBranch'=>'viewContainer/Branch/VBranch.php','VBranchSearchTable'=>'viewContainer/Branch/VBranchSearchTable.php','VListofBranches'=>'viewContainer/Branch/VListofBranches.php','VNewBranchAdd'=>'viewContainer/Branch/VNewBranchAdd.php','VCall'=>'viewContainer/Call/VCall.php','VCallTable'=>'viewContainer/Call/VCallTable.php','VCertificate'=>'viewContainer/Certificate/VCertificate.php','VCertificateTable'=>'viewContainer/Certificate/VCertificateTable.php','Dashboard'=>'viewContainer/Dashboard.php','VFileManager'=>'viewContainer/FileManager/VFileManager.php','VLogo'=>'viewContainer/Logo/VLogo.php','VLogoTable'=>'viewContainer/Logo/lototable/VLogoTable.php','VMenu'=>'viewContainer/Menu/VMenu.php','VMenuTable'=>'viewContainer/Menu/VMenuTable.php','VNewMenu'=>'viewContainer/Menu/VNewMenu.php','VAddProject'=>'viewContainer/Prise/VAddProject.php','VEditPrice'=>'viewContainer/Prise/VEditPrice.php','VPrise'=>'viewContainer/Prise/VPrise.php','VPriseTable'=>'viewContainer/Prise/VPriseTable.php','VProject'=>'viewContainer/Project/VProject.php','VProjectTable'=>'viewContainer/Project/VProjectTable.php','VSliderTable'=>'viewContainer/Slider/VSliderTable.php','VSliders'=>'viewContainer/Slider/VSliders.php','VType'=>'viewContainer/Type/VType.php','VTypeTable'=>'viewContainer/Type/VTypeTable.php','C_DeleteNComments'=>'viewContainer/blog/C_DeleteNComments.php','VAddMoreURL'=>'viewContainer/blog/VAddMoreURL.php','VAllApprovComments'=>'viewContainer/blog/VAllApprovComments.php','VAllNewComments'=>'viewContainer/blog/VAllNewComments.php','VAllReports'=>'viewContainer/blog/VAllReports.php','VCategory'=>'viewContainer/blog/VCategory.php','VChangePassword'=>'viewContainer/blog/VChangePassword.php','VEditPost'=>'viewContainer/blog/VEditPost.php','VMoreURL'=>'viewContainer/blog/VMoreURL.php','VPostDataTable'=>'viewContainer/blog/VPostDataTable.php','VPostGUI'=>'viewContainer/blog/VPostGUI.php','VViewSingelComment'=>'viewContainer/blog/VViewSingelComment.php','VViewSingleCommentForApprove'=>'viewContainer/blog/VViewSingleCommentForApprove.php','V_EditLink'=>'viewContainer/blog/V_EditLink.php','V_AllRepotsTable'=>'viewContainer/blog/displayTable/V_AllRepotsTable.php','V_ApproveCommentTable'=>'viewContainer/blog/displayTable/V_ApproveCommentTable.php','V_CategoryTable'=>'viewContainer/blog/displayTable/V_CategoryTable.php','V_NewCommetTable'=>'viewContainer/blog/displayTable/V_NewCommetTable.php','V_PostDataTable'=>'viewContainer/blog/displayTable/V_PostDataTable.php','V_SearchDatafromTable'=>'viewContainer/blog/displayTable/V_SearchDatafromTable.php','V_UrlTable'=>'viewContainer/blog/displayTable/V_UrlTable.php','VListofPreBooking'=>'viewContainer/book/VListofPreBooking.php','VPreBooking'=>'viewContainer/book/VPreBooking.php','VJobApplication'=>'viewContainer/career/VJobApplication.php','VJobList'=>'viewContainer/career/VJobList.php','VListofJob'=>'viewContainer/career/VListofJob.php','VListofJobApplication'=>'viewContainer/career/VListofJobApplication.php','VNewJob'=>'viewContainer/career/VNewJob.php','VClient'=>'viewContainer/client/VClient.php','VClientTable'=>'viewContainer/client/VClientTable.php','VCreateEvent'=>'viewContainer/gallery/Event/VCreateEvent.php','VEventPhotoTable'=>'viewContainer/gallery/Event/VEventPhotoTable.php','VViewEventPhotos'=>'viewContainer/gallery/Event/VViewEventPhotos.php','VBulkofPhotoUploadView'=>'viewContainer/gallery/photo/VBulkofPhotoUploadView.php','VViewPhotoGallery'=>'viewContainer/gallery/photo/VViewPhotoGallery.php','VSendSub'=>'viewContainer/subscription/VSendSub.php','VSub'=>'viewContainer/subscription/VSub.php','VSubList'=>'viewContainer/subscription/VSubList.php','VTestimonials'=>'viewContainer/testimonials/VTestimonials.php','VTestimonialsTable'=>'viewContainer/testimonials/VTestimonialsTable.php','VSingleVideo'=>'viewContainer/youtube_video/VSingleVideo.php','welcome_message'=>'welcome_message.php','C_CreateArea'=>'Application/Area/C_CreateArea.php','C_DeleteArea'=>'Application/Area/C_DeleteArea.php','C_ApproveCall'=>'Application/Call/C_ApproveCall.php','C_DeletePdf'=>'Application/Certificate/C_DeletePdf.php','C_UploadCertificate'=>'Application/Certificate/C_UploadCertificate.php','C_Dashboard'=>'Application/Display/C_Dashboard.php','C_CreatePrise'=>'Application/Prise/C_CreatePrise.php','C_DeletePrise'=>'Application/Prise/C_DeletePrise.php','C_EditPrise'=>'Application/Prise/C_EditPrise.php','C_UpdatePrise'=>'Application/Prise/C_UpdatePrise.php','C_NewProject'=>'Application/Project/C_NewProject.php','C_DeleteSlider'=>'Application/Slider/C_DeleteSlider.php','C_UploadSlider'=>'Application/Slider/C_UploadSlider.php','C_CreateType'=>'Application/Type/C_CreateType.php','C_DeleteType'=>'Application/Type/C_DeleteType.php','C_AddComment'=>'Application/blog/C_AddComment.php','C_AddMoreLink'=>'Application/blog/C_AddMoreLink.php','C_AddNewCategory'=>'Application/blog/C_AddNewCategory.php','C_ApproveComment'=>'Application/blog/C_ApproveComment.php','C_DeleteCategory'=>'Application/blog/C_DeleteCategory.php','C_DeleteComment'=>'Application/blog/C_DeleteComment.php','C_DeleteCompletePost'=>'Application/blog/C_DeleteCompletePost.php','C_DeleteReportMsg'=>'Application/blog/C_DeleteReportMsg.php','C_DeleteSComment'=>'Application/blog/C_DeleteSComment.php','C_DeleteSpasificLink'=>'Application/blog/C_DeleteSpasificLink.php','C_Notification'=>'Application/blog/C_Notification.php','C_NotificationList'=>'Application/blog/C_NotificationList.php','C_PostData'=>'Application/blog/C_PostData.php','C_ReSendOTP'=>'Application/blog/C_ReSendOTP.php','C_UpdateLinkData'=>'Application/blog/C_UpdateLinkData.php','C_UpdateNotificationRD'=>'Application/blog/C_UpdateNotificationRD.php','C_UpdatePostData'=>'Application/blog/C_UpdatePostData.php','C_UploadBulkEventImage'=>'Application/gallery/Event/C_UploadBulkEventImage.php','C_UploadBulkImage'=>'Application/gallery/Photo/C_UploadBulkImage.php','C_ConfirmBooking'=>'Application/book/C_ConfirmBooking.php','C_CreateNewBranch'=>'Application/branch/C_CreateNewBranch.php','C_UpdateBranch'=>'Application/branch/C_UpdateBranch.php','C_ChangePassword'=>'Application/comm/C_ChangePassword.php','C_OpenLink'=>'Application/comm/C_OpenLink.php','C_OpenLink2'=>'Application/comm/C_OpenLink2.php','C_OpenLinkFalse'=>'Application/comm/C_OpenLinkFalse.php','C_OpenLinkTrue'=>'Application/comm/C_OpenLinkTrue.php','C_PrintMessage'=>'Application/comm/C_PrintMessage.php','Cpage_404'=>'Application/error/Cpage_404.php','C_DeleteEventPhoto'=>'Application/gallery/Event/C_DeleteEventPhoto.php','C_ViewEventWisePhoto'=>'Application/gallery/Event/C_ViewEventWisePhoto.php','C_DeleteGalleryPhoto'=>'Application/gallery/Photo/C_DeleteGalleryPhoto.php','C_DeleteJobPost'=>'Application/jobpost/C_DeleteJobPost.php','C_SaveJobPost'=>'Application/jobpost/C_SaveJobPost.php','C_viewDoc'=>'Application/jobpost/C_viewDoc.php','C_DeleteClient'=>'Application/master/client/C_DeleteClient.php','C_UploadClient'=>'Application/master/client/C_UploadClient.php','C_DeleteLogo'=>'Application/master/logo/C_DeleteLogo.php','C_SetCompanyDefaultLogo'=>'Application/master/logo/C_SetCompanyDefaultLogo.php','C_UploadLogo'=>'Application/master/logo/C_UploadLogo.php','C_CreateNewMenu'=>'Application/menu/C_CreateNewMenu.php','C_ListofFile'=>'Application/menu/C_ListofFile.php','C_SendNeweletterMail'=>'Application/sub/C_SendNeweletterMail.php','C_DeleteTestimonials'=>'Application/testimonials/C_DeleteTestimonials.php','C_UploadTestimonials'=>'Application/testimonials/C_UploadTestimonials.php','C_DeleteYoutubeVideo'=>'Application/youtube_video/C_DeleteYoutubeVideo.php','C_SingleVideo'=>'Application/youtube_video/C_SingleVideo.php','Crout'=>'Crout.php','tempClass'=>'tempClass.php');  