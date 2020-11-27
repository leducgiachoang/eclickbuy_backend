<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .full {
            background-color: whitesmoke;
            margin: auto;
            text-align: center;
        }

        ul {
            display: inline-block;
            list-style: none;
            margin: 0px;
            padding: 0px;
        }

        ul li {
            display: inline-block;
            list-style: none;
            height: 30px;
            width: 30px;
            border-radius: 50% 50%;
            border: 1px solid black;
            margin: 0px 5px;
        }

        ul li a {
            text-decoration: none;
            line-height: 30px;
        }

        .logo {
            margin: auto;
            text-align: center;
        }

        .logo img {
            padding-top: 20px;
            width: 190px
        }

        .content {
            background-color: white;
            width: 65%;
            margin: auto;
            text-align: center;
        }

        .content-1 {
            text-align: center;
            margin: auto;
        }

        .content-1 .account {
            font-size: 25px;
            font-weight: 650;
            padding-top: 20px;
        }

        .content-1 .user {
            font-size: 20px;
            font-weight: 650;
        }

        .content-1 .thank {
            font-size: 17px;
            font-weight: 450;
        }

        button {
            border: 0px;
            padding: 8px;
            border-radius: 5px;
            background-color: rgb(36, 148, 252);
        }

        button span {
            font-weight: 600;
            color: white;
        }

        .you {
            font-size: 17px;
            font-weight: 450;
            padding: 40px;
        }

        .content-2 {
            margin: auto;
            text-align: center;
        }

        .content-2 a {
            font-size: 17px;
            font-weight: 650;
            color: rgb(189, 188, 188);
        }

        .content-2 .ft {
            font-size: 17px;
            font-weight: 550;
            color: rgb(117, 117, 117)
        }

        @media (max-width: 680px) {
            .content {
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <div class="full">
        <div class="logo"><img src="https://lh3.googleusercontent.com/JTUKrIl9FQo2nysaWZuZKJQguy0oWbRErDXvKFR-KrcaDuk3oyFQheIjeTua4AR3qA118yeLPAw3kv17X8MJxIQEK6RW5fo84ChrCiNTVHQUcrzGTUhGiEMywjrDsMHofFDiN3J2v1EC9ID3s0r0YkdOiN7qaUCjSm7bel5pqo6FY5dbJ6v6o9EMVR1rnjsC1j94Rhr1howHcAnFLdFmlWWwBu46954FvW__fa2sdeG9EmwwcgbSFmSMm486Be_R1NFQpmyuN0NcHyF1qHlW9A3lB-_ViTuyFUqxkrxKcmTVgIDIPLANy3vqe1npREqnWBdNBUND-1IQyDxotpNhHuYRuIIqfFRDqynfQr8huo80A9wLXvKE-yC4CImnnOmfbe9v2wJU6DUHDLZUehSMwDKqVS_zdCtLyK2JxSsceiL8gDOvOuA27DKd85CkKh6lNR3ub9zxiDNpstyBrwA5A0bsTsMbSSUTBRqjUll5uSSWxrp1USEYIwkT4LOi65ORda2-WwefSYjf6vHWKxMbudEp99kwadIQMSkNwdVYWD1dEl_7j8tel_qly5RhWMmeFX7QQO3kl5ym21YCTtKbhzHpdtoJNOc70WMe4b096z9I7HO_EemO58-Qnajaf66z5aijc0GGPvmrXLuXItpi32a5D_Eigda4lKQCmUwVUaB8fzNyQ8BeNdD4teA8X58=w465-h166-no?authuser=0" alt=""></div>
        <div class="content">
            <div class="content-1">
                <p class="account">KÍCH HOẠT TÀI KHOẢN</p>
                <div class="user"><img width="150px" src="https://assets.materialup.com/uploads/1aba76ab-9ad9-419b-ac4f-c43d1a56d688/Inbox.png" alt=""></div>
                <p class="user">Xin chào {{ $ten }},</p>
                <p class="thank">Cảm ơn bạn, email của bạn đã được xác minh. Tài khoản của bạn hiện đã có sẵn<br>
                    <span>Vui lòng sử dụng liên kết dưới đây để đăng nhập vào tài khoản của bạn.</span>
                </p><br>
                <a href="{{ $link }}"><button><span>ĐĂNG NHẬP VÀO TÀI KHOẢN CỦA BẠN</span></button></a>

                <p class="you">Cảm ơn bạn đã chọn mẫu Email Khởi động</p>
            </div>
        </div>
        <div class="content-2">
            <a href="">Xem trang web của chúng tôi</a>
            <p class="ft">@ 2020 ECLCIKBUY, Inc.
                Đã đăng ký Bản quyền.<br>
                <span>137 Nguyễn Thị Thập, Hòa Minh, Liên Chiểu, Đà Nẵng</span>
            </p>
            <ul>
                <li>
                    <a href=""><img width="20px" style="margin-top: 7px;" src="https://lh3.googleusercontent.com/m9pR7V4fkQKbe2eUTXsvFkpVq8QyKxNYzcHwxDLKSLVwfGMU3dvFwQh040sOt8CSiSosdl4uomk2VWRJi8e8GmtBzaNfCSiUrb4J5cm8-qks5n79y2wU1XHn3lKB5ZVqpPLqpkEWOMNEun2c67ZAi05RxEyh8WOKEky4UhBL9a7kFGivmUlrqaCD5WE3h-Ju2jaI_KizhqUjNRlehANXn_yM5-vOUd_2pgpoyFi1XIg49fCwxGvYIzcyxEn_cHQD3MeLbg9YaD0O5mHGmfVQNpgBRvU7QUgCaZj58nnMBkBK1_nrlvBfkKtQtzvzYecGcTY5WUlVtDqnZJ-xr7QByAHjkqXFLpH19RXZ3dwaOXuc0uuBxXZ_Mhg_D9ilAYqllrfnPuM8K1fNUFLOJBCsri6MYQoU1EnPfBczBvpCIUQp6EsepkXN9k_6BtiTsfrhLiwpjyW66x9L7WZsOqG2LBGwbJuTv8K_fn2qqDS-LwZLRgMtwLO4IyfBcjMbn6EPzbicW_NtH964A5aKWRHpzClJ1olKM2QVXRhjz9yBHafGZgB993gg9hHui25-B91e4YVvkufwZ-WBYJio7Nfj9mFo9I92-ZZ_flCKuTVjs4r4iNogWAfbcrqUZz0etMy6uQNXgiinJun5yBV8Gag6eqRb29CDSNupEvrKPziEQnvi8bF_IHy_VLYCs_zishE=s200-no?authuser=0" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="18px" style="margin-top: 9px;margin-bottom: 5px;" src="https://lh3.googleusercontent.com/amJ13gci-W3u2Zq7cn5u082T2WbJXnEiURUr2JNYI7IbuPzn7r1CO6QxPF_FMdVgZi8HuOOPiruf457eQ7yrzHdsAtU1QOToJhbJMgPsuEgdyc3mUqDaO8KTbYgrAllExO29iCA1aZaM4dKIDwMcsdBxRUTKN9HwTfSlLxk8ef8ZTv_wh5_8vR06T9UN9FBasQmnnrrnjN4dqdArEzY-8ipFcdOV451FjiaiHTAwlfFdBULa9hEFYwPq079hYkRUZqjP_yTCJ1WtyZX69AczNuU2g9j7AIZgH9GMg-AbfMFjuHB0B5azjQRCODq5FvUA930_8Vj09dQG4Jro0ADFK6hL2BsmrNM1zsjRc6OAfU57tpPBGSSyyn34NBRbB0oNv56AUg4PicHV1xARjH6K2oTKd4KG8WYei-4Cg6QVru2edlE3zZhWZzhXJlWTyaafNXHRmZmPhfd8YCShAoFjEQ2KumoK590eHos5iuRar5-uCJQR69wlO9DSc1Y8F4N-1kRdd3hi1lRpbG507bnuQt8-vJTH_PQgGMMZuu4iwr5qWU5TzrHgfAVXT9feHqft0emRPkTLTDOHUKUNcambjb-mrhEVmoicOQfUgB0XksTjjVlmm26Pl-IZLlps0u4VrENAo3ZBcCgxhAmxSEWiqY0dx_IIVUkqNRkV-dSF2SmWw5V18G_FMa97otWeulg=s360-no?authuser=0"
                            alt=""></a>
                </li>
                <li>
                    <a href=""><img width="18px" style="margin-top: 4px;margin-bottom: 5px;" src="https://lh3.googleusercontent.com/pv3fBtEGLSukUMcfW78wFvx8kLJhP0f-C66wrbCjpwQchzIIZG0nj1C1-zznNIq9cxcPpVf_OonGpfQTauBmg-XVLlQbnAefDZhYo2_cQjFajyKCJw-usECwbENrr5bgBLHfPtr8k3DOr73ejirv9TWxbPJVq5q9hcmJ7siScltngJrg9J4rsH7YFDny6ubKFUeDLJEpSa7d1PQSjGbgN6lwu5Io9qiRZBf0aOL1L3s9uaqhhhRs-mYnVy5NuNjf7P7J18-DoYrPWtVHoo7L4VqqYShzsoCWZAVUK6bxvgruhQj0VARILlv3czdbfgYf2D6YTgfxCBwxS7o0Xm3TsYcjEgO0MnkPwE5FuzGMyUMNmgYVlDof02ymzMMSda8OS2WWj77icRV1zOoEog3dhAfPF-UjyXYq8qP5_utOSZaXh9MjeAnSaCK4bm_v4SeVGWon7UVUNPeb1Rtb0ROPOLiRHCNQTwb0nrk0lnMq5Yz5Cs3U-8tFdPriZBm_cah5Yxhbg2JJo8M9W-5aaHZ977gKM7h4khLZLu-23wApRAGA_QJNdMY47CHUKRfs9XCax3YkLStrr1ND3mp2WUWlK1B9mZ8MvxAWidZCOmc2RLdyPoHc-rKn92AwGYWWUDytFyf1X7bCacxwRGeXlW_Z_2cb-ZtdrYIyf5RO4GLtXfDyxO570uN9CK5JwnAbpJI=s512-no?authuser=0"
                            alt=""></a>
                </li>
            </ul>
            <p class="ft"> Bạn nhận được email này vì bạn đã đăng ký tài khoản tại ECLICKBUY</p>

        </div>
    </div>
</body>

</html>
