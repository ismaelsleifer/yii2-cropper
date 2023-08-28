<?php

/** 
 * @var $unique string
 * @var $cropperOptions [] 
 * 
*/

$modalLabel =  $cropperOptions['modalLabel'] ?? Yii::t('cropper', 'Image Crop Editor');
// $browseLabel = $cropperOptions['icons']['browse'] . ' ' . Yii::t('cropper', 'Browse');
$browseLabel = $cropperOptions['buttonLabel'] ?? 'Browse';
$browseLabel = $cropperOptions['icons']['browse'] . ' ' . $browseLabel;
$cropLabel = $cropperOptions['icons']['crop'] . ' ' . Yii::t('cropper', 'Crop');
$closeLabel = $cropperOptions['icons']['close'] . ' ' . Yii::t('cropper', 'Crop') . ' & ' . Yii::t('cropper', 'Close');

$cropWidth = $cropperOptions['width'];
$cropHeight = $cropperOptions['height'];

echo '<div class="modal fade" tabindex="-1" role="dialog" id="cropper-modal-'. $unique .'">'
    .'<div class="modal-dialog modal-lg" role="document">'
        .'<div class="modal-content">'
            .'<div class="modal-header">'
                .'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                .'<h4 class="modal-title" id="modalLabel-'. $unique .'">'. $modalLabel .'</h4>'
            .'</div>'
            .'<div class="modal-body">'
                .'<div><img id="cropper-image-'. $unique .'" src="" alt=""></div>'
                .'<div class="cropperBtnEdit">'
                    .'<span class="btn btn-primary btn-file">'. $browseLabel
                        .'<input type="file" id="cropper-input-'. $unique .'" title="'. Yii::t('cropper', 'Browse') .'" accept="image/*">'
                    .'</span>&nbsp;'
                    .'<div class="btn-group">'
                        .'<button type="button" class="btn btn-primary zoom-in">'.$cropperOptions['icons']['zoom-in'].'</span></button>'
                        .'<button type="button" class="btn btn-primary zoom-out">'.$cropperOptions['icons']['zoom-out'].'</button>'
                    .'</div>&nbsp;'
                    .'<div class="btn-group">'
                        .'<button type="button" class="btn btn-primary rotate-left">'.$cropperOptions['icons']['rotate-left'].'</button>'
                        .'<button type="button" class="btn btn-primary rotate-right">'.$cropperOptions['icons']['rotate-right'].'</button>'
                        .'<button type="button" class="btn btn-primary flip-horizontal">'.$cropperOptions['icons']['flip-horizontal'].'</button>'
                        .'<button type="button" class="btn btn-primary flip-vertical">'.$cropperOptions['icons']['flip-vertical'].'</button>'
                    .'</div>&nbsp;'
                    .'<div class="btn-group">'
                        .'<button type="button" class="btn btn-primary move-left">'.$cropperOptions['icons']['move-left'].'</button>'
                        .'<button type="button" class="btn btn-primary move-right">'.$cropperOptions['icons']['move-right'].'</span></button>'
                        .'<button type="button" class="btn btn-primary move-up">'.$cropperOptions['icons']['move-up'].'</button>'
                        .'<button type="button" class="btn btn-primary move-down">'.$cropperOptions['icons']['move-down'].'</button>'
                    .'</div>'
                .'</div>'
            .'</div>'
            .'<div class="modal-footer">'
                .'<button type="button" id="crop-button-'. $unique .'" class="btn btn-success">'. $cropLabel .'</button>'
                .'<button type="button" id="close-button-'. $unique .'" class="btn btn-danger" data-dismiss="modal">'. $closeLabel .'</button>'
            .'</div>'
        .'</div>'
    .'</div>'
.'</div>';




// .'<div class="">'
// .'<span class="btn btn-primary btn-file">'. $browseLabel
//     .'<input type="file" id="cropper-input-'. $unique .'" title="'. Yii::t('cropper', 'Browse') .'" accept="image/*">'
// .'</span>&nbsp;'
// .'<div class="btn-group">'
//     .'<button type="button" class="btn btn-primary zoom-in">'.$cropperOptions['icons']['zoom-in'].'</span></button>'
//     .'<button type="button" class="btn btn-primary zoom-out">'.$cropperOptions['icons']['zoom-out'].'</button>'
// .'</div>&nbsp;'
// .'<div class="btn-group">'
//     .'<button type="button" class="btn btn-primary rotate-left">'.$cropperOptions['icons']['rotate-left'].'</button>'
//     .'<button type="button" class="btn btn-primary rotate-right">'.$cropperOptions['icons']['rotate-right'].'</button>'
//     .'<button type="button" class="btn btn-primary flip-horizontal">'.$cropperOptions['icons']['flip-horizontal'].'</button>'
//     .'<button type="button" class="btn btn-primary flip-vertical">'.$cropperOptions['icons']['flip-vertical'].'</button>'
// .'</div>&nbsp;'
// .'<div class="btn-group">'
//     .'<button type="button" class="btn btn-primary move-left">'.$cropperOptions['icons']['move-left'].'</button>'
//     .'<button type="button" class="btn btn-primary move-right">'.$cropperOptions['icons']['move-right'].'</span></button>'
//     .'<button type="button" class="btn btn-primary move-up">'.$cropperOptions['icons']['move-up'].'</button>'
//     .'<button type="button" class="btn btn-primary move-down">'.$cropperOptions['icons']['move-down'].'</button>'
// .'</div>'
// .'</div>'