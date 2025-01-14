<?php

return [

    'does_not_exist' => 'تسمية الحالة غير موجودة.',
    'deleted_label' => 'Deleted Status Label',
    'assoc_assets'	 => 'ترتبط تسمية الحالة هذه مع واحد على الأقل من الأصول ولا يمكن حذفها. يرجى تحديث الأصول حيث لا تشير إلى هذه الحالة وحاول مرة أخرى. ',

    'create' => [
        'error'   => 'لم يتم إنشاء تسمية الحالة، يرجى إعادة المحاولة.',
        'success' => 'تم إنشاء تسمية الحالة بنجاح.',
    ],

    'update' => [
        'error'   => 'لم يتم تحديث تسمية الحالة، يرجى إعادة المحاولة',
        'success' => 'تم تحديث تسمية الحالة بنجاح.',
    ],

    'delete' => [
        'confirm'   => 'هل تريد بالتأكيد حذف تسمية الحالة هذه؟',
        'error'   => 'حدثت مشكلة أثناء حذف تسمية الحالة. حاول مرة اخرى.',
        'success' => 'تم حذف تسمية الحالة بنجاح.',
    ],

    'help' => [
        'undeployable'   => 'لا يمكن اخراج هذه الأصول لأي شخص.',
        'deployable'   => 'يمكن اخراج هذه الأصول. بعد تعيينهم، سيتم اعطاءها الحالة <i class="fas fa-circle text-blue"></i> <strong>تم التوزيع</strong>.',
        'archived'   => 'لا اخراج هذه الأصول، ولن تظهر إلا في المؤرشفة. وهذا مفيد للاحتفاظ بالمعلومات عن الأصول لأغراض الميزانية / التاريخية وايضا الاحتفاظ بها خارج قائمة الأصول اليومية.',
        'pending'   => 'لا يمكن بعد اخراج هذه الأصول لأي شخص، غالبا ما تستخدم للأصول اللتي قيد الصيانة، ولكن من المتوقع أن تعود إلى الاستخدام.',
    ],

];
