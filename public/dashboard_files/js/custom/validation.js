
        $(document).ready(function() {
            $("#regForm").validate({
                rules: {
                    name: "required",
                    identification_number: "required",
                    identification_photo: "required",
                    is_featured: "required",
                    status: "required",

                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    identification_number: "هذا الحقل مطلوب",
                    identification_photo: "هذا الحقل مطلوب",
                    is_featured: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",

                }
            });


            $("#editForm").validate({
                rules: {
                    name: "required",
                    identification_number: "required",
                    is_featured: "required",
                    status: "required",
                    email: "required",
                    phone: "required",

                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    identification_number: "هذا الحقل مطلوب",
                    is_featured: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",
                    email: "هذا الحقل مطلوب",
                    phone: "هذا الحقل مطلوب",

                }
            });


            $("#reg_category").validate({
                rules: {
                    name: "required",
                    max_price: "required",
                    min_price: "required",
                    status: "required",
                    icon: "required",
                    category_id: "required",
                    reply: "required",
                    photo: "required",

                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    max_price: "هذا الحقل مطلوب",
                    min_price: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",
                    icon: "هذا الحقل مطلوب",
                    category_id: "هذا الحقل مطلوب",
                    reply: "هذا الحقل مطلوب",
                    photo: "هذا الحقل مطلوب",

                }
            });



            $("#reg_category2").validate({
                rules: {
                    name: "required",
                    max_price: "required",
                    min_price: "required",
                    status: "required",
                    icon: "required",
                    category_id: "required",
                    reply: "required",

                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    max_price: "هذا الحقل مطلوب",
                    min_price: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",
                    icon: "هذا الحقل مطلوب",
                    category_id: "هذا الحقل مطلوب",
                    reply: "هذا الحقل مطلوب",

                }
            });


            $("#reg_tutorial").validate({
                rules: {
                    title: "required",
                    body: "required",
                    status: "required",
                    image: "required",

                },
                messages: {
                    title: "هذا الحقل مطلوب",
                    body: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",
                    image: "هذا الحقل مطلوب",

                }
            });

            $("#reg_tutorial2").validate({
                rules: {
                    title: "required",
                    body: "required",
                    status: "required",

                },
                messages: {
                    title: "هذا الحقل مطلوب",
                    body: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",

                }
            });


            $("#reg_admin").validate({
                rules: {
                    name: "required",
                    email: "required",
                    phone: "required",
                    status: "required",
                    password: "required",
                    roles_name: "required",

                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    email: "هذا الحقل مطلوب",
                    phone: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",
                    password: "هذا الحقل مطلوب",
                    roles_name: "هذا الحقل مطلوب",

                }
            });

            $("#reg_admin2").validate({
                rules: {
                    name: "required",
                    email: "required",
                    phone: "required",
                    status: "required",
                    roles_name: "required",

                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    email: "هذا الحقل مطلوب",
                    phone: "هذا الحقل مطلوب",
                    status: "هذا الحقل مطلوب",
                    roles_name: "هذا الحقل مطلوب",

                }
            });

            $("#validate").validate({
                rules: {
                    name: "required",
                    permission: "required",


                },
                messages: {
                    name: "هذا الحقل مطلوب",
                    permission: "هذا الحقل مطلوب",


                }
            });
        });
