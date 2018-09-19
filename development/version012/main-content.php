
<script type="text/javascript">
    $(document).ready(function () {
        $('#searchbox').submit(function () {
            var url = '';
            var keyword = $('#search_keyword').val();
            if (keyword != '') {
                keyword = keyword.trim();
                while (keyword.indexOf(" ") >= 0) {
                    keyword = keyword.replace(" ", "-");
                }
                url = "/" + keyword + "-tim-kiem.html";
            }
            window.location = url;
            return false;
        });
    });
</script>
<div class="wrapper">
    <header id="top">
        <div id="site-header">
            <div id="banner_top" class="banner">
                <div id="advTop"></div>
            </div>
        </div>
        <nav class="categories">
            <ul>
                <li class="parent homepage current"><a href="/" title="Tin tức">Tin tức</a></li>
                <!-- END MENU -->
                <li class="parent thoi-su ">
                    <a href="/thoi-su.html">Thời sự</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/giao-thong.html">Giao thông</a>
                            </li>
                            <li>
                                <a href="/do-thi.html">Đô thị</a>
                            </li>
                            <li>
                                <a href="/doi-song.html">Đời sống</a>
                            </li>
                            <li>
                                <a href="/quoc-phong.html">Quốc phòng</a>
                            </li>
                            <li>
                                <a href="/anh-video-thoi-su.html">Ảnh & Video</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent the-gioi ">
                    <a href="/the-gioi.html">Thế giới</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/anh-video-the-gioi.html">Ảnh & Video</a>
                            </li>
                            <li>
                                <a href="/quan-su-the-gioi.html">Quân sự</a>
                            </li>
                            <li>
                                <a href="/tu-lieu-the-gioi.html">Tư liệu</a>
                            </li>
                            <li>
                                <a href="/phan-tich-the-gioi.html">Phân tích</a>
                            </li>
                            <li>
                                <a href="/nguoi-viet-4-phuong.html">Người Việt 4 phương</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent kinh-doanh-tai-chinh ">
                    <a href="/kinh-doanh-tai-chinh.html">Kinh doanh</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/tai-chinh.html">Tài chính</a>
                            </li>
                            <li>
                                <a href="/chung-khoan.html">Chứng khoán</a>
                            </li>
                            <li>
                                <a href="/bat-dong-san.html">Bất động sản</a>
                            </li>
                            <li>
                                <a href="/doanh-nhan.html">Doanh nhân</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent phap-luat ">
                    <a href="/phap-luat.html">Pháp luật</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/phap-dinh.html">Pháp đình</a>
                            </li>
                            <li>
                                <a href="/vu-an.html">Vụ án</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent xuat-ban ">
                    <a href="/xuat-ban.html">Xuất bản</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/tin-tuc-xuat-ban.html">Tin tức xuất bản</a>
                            </li>
                            <li>
                                <a href="/sach-hay.html">Sách hay</a>
                            </li>
                            <li>
                                <a href="/tac-gia.html">Tác giả</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent the-thao ">
                    <a href="/the-thao.html">Thể thao</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/the-thao-viet-nam.html">Thể thao Việt Nam</a>
                            </li>
                            <li>
                                <a href="/cup-chau-au.html">Cup Châu Âu</a>
                            </li>
                            <li>
                                <a href="/the-thao-the-gioi.html">Thể thao Thế giới</a>
                            </li>
                            <li>
                                <a href="/bong-da-anh.html">Bóng đá Anh</a>
                            </li>
                            <li>
                                <a href="/bong-da-viet-nam.html">Bóng đá Việt Nam</a>
                            </li>
                            <li>
                                <a href="/hau-truong-the-thao.html">Hậu trường thể thao</a>
                            </li>
                            <li><a href="https://zing.vn/songcungworldcup/tin-tuc" target="_blank">Sống cùng World Cup</a></li>
                        </ul>
                    </div>
                </li>
                <li class="parent cong-nghe ">
                    <a href="/cong-nghe.html">Công nghệ</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/dien-thoai.html">Điện thoại</a>
                            </li>
                            <li>
                                <a href="/may-tinh-bang.html">Máy tính bảng</a>
                            </li>
                            <li>
                                <a href="/ung-dung-di-dong.html">Ứng dụng di động</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent oto-xe-may ">
                    <a href="/oto-xe-may.html">Xe 360</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/xe-may.html">Xe máy</a>
                            </li>
                            <li>
                                <a href="/o-to.html">Ô-tô</a>
                            </li>
                            <li>
                                <a href="/xe-do.html">Xe độ</a>
                            </li>
                            <li>
                                <a href="/sieu-xe.html">Siêu xe</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent giai-tri ">
                    <a href="/giai-tri.html">Giải trí</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/sao-viet.html">Sao Việt</a>
                            </li>
                            <li>
                                <a href="/sao-chau-a.html">Sao Châu Á</a>
                            </li>
                            <li>
                                <a href="/sao-hollywood.html">Sao Hollywood</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent am-nhac ">
                    <a href="/am-nhac.html">Âm nhạc</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/nhac-viet.html">Nhạc Việt</a>
                            </li>
                            <li>
                                <a href="/nhac-han.html">Nhạc Hàn</a>
                            </li>
                            <li>
                                <a href="/nhac-au-my.html">Nhạc Âu Mỹ</a>
                            </li>
                            <li><a href="/zing-chart-tieu-diem.html">#ZingChart</a></li>
                        </ul>
                    </div>
                </li>
                <li class="parent phim-anh ">
                    <a href="/phim-anh.html">Phim ảnh</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/phim-chieu-rap.html">Phim chiếu rạp</a>
                            </li>
                            <li>
                                <a href="/phim-truyen-hinh.html">Phim truyền hình</a>
                            </li>
                            <li>
                                <a href="/game-show.html">Game Show</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent thoi-trang ">
                    <a href="/thoi-trang.html">Thời trang</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/thoi-trang-sao.html">Thời trang sao</a>
                            </li>
                            <li>
                                <a href="/mac-dep.html">Mặc đẹp</a>
                            </li>
                            <li>
                                <a href="/lam-dep.html">Làm đẹp</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent song-tre ">
                    <a href="/song-tre.html">Sống trẻ</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/guong-mat-tre.html">Gương mặt trẻ</a>
                            </li>
                            <li>
                                <a href="/cong-dong-mang.html">Cộng đồng mạng</a>
                            </li>
                            <li>
                                <a href="/su-kien.html">Sự kiện</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent giao-duc ">
                    <a href="/giao-duc.html">Giáo dục</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/tuyen-sinh-dai-hoc-2018.html">Tuyển sinh 2018</a>
                            </li>
                            <li>
                                <a href="/tu-van-giao-duc.html">Tư vấn</a>
                            </li>
                            <li>
                                <a href="/du-hoc.html"> Du học</a>
                            </li>
                            <li><a href="/hoc-tieng-anh-tieu-diem.html">Học Tiếng Anh</a></li>
                        </ul>
                    </div>
                </li>
                <li class="parent suc-khoe ">
                    <a href="/suc-khoe.html">Sức khỏe</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/khoe-dep.html">Khỏe đẹp</a>
                            </li>
                            <li>
                                <a href="/dinh-duong.html">Dinh dưỡng</a>
                            </li>
                            <li>
                                <a href="/me-va-be.html">Mẹ và Bé</a>
                            </li>
                            <li>
                                <a href="/benh-thuong-gap.html">Bệnh thường gặp</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent du-lich ">
                    <a href="/du-lich.html">Du lịch</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/dia-diem-du-lich.html">Địa điểm du lịch</a>
                            </li>
                            <li>
                                <a href="/kinh-nghiem-du-lich.html">Kinh nghiệm du lịch</a>
                            </li>
                            <li>
                                <a href="/phuot.html">Phượt</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent am-thuc ">
                    <a href="/am-thuc.html">Ẩm thực</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/dia-diem-an-uong.html">Địa điểm ăn uống</a>
                            </li>
                            <li>
                                <a href="/mon-ngon.html">Món ngon</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="parent nhip-song ">
                    <a href="/nhip-song.html">Nhịp sống</a>
                    <div class="subcate">
                        <ul>
                            <li>
                                <a href="/TTDN.html">Thông tin doanh nghiệp</a>
                            </li>
                            <li>
                                <a href="/nhip-song/cuoi.html">Cười</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="homepage" class="focus_layout">
        <div class="content-wrap">
            <div class="hotnews">
                <p class="controller">
                    <a href="#rewind" class="rewind">Trước</a>
                    <a href="#forward" class="forward">Sau</a>
                </p>
                <h1>Tin tức mới</h1>
                <ul>
                </ul>
                <time datetime="2018-09-19 20:29+0700" pubdate>Cập nhật </time>
            </div>
            <section class="featured">
                <article class="featured " topic-id="2000,2020,2208,2369,4226,4616">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/ho-co-chui-co-danh-toi-van-la-hiep-khung-cua-xom-tro-post877915.html">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/ofh_cgmzstgk/2018_09_18/hh_thumb.jpg" alt="&#39;Ho co chui, co danh, toi van la Hiep Khung cua xom tro&#39; hinh anh" title="&#39;Họ có chửi, có đánh, tôi vẫn là Hiệp Khùng của xóm trọ&#39; hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/ho-co-chui-co-danh-toi-van-la-hiep-khung-cua-xom-tro-post877915.html">
                                'Họ có chửi, có đánh, tôi vẫn là Hiệp Khùng của xóm trọ'
                            </a>
                            <span class="comment_count">47</span>
                        </p>
                        <time datetime="2018-09-19 19:29+0700"></time>
                        <p class="cate">Thời sự</p>
                        <p class="summary">Dù bị hành hung vì cho rằng vụ hỏa hoạn bắt nguồn từ nhà trọ của mình, ông Hiệp "Khùng" vẫn đang lo lắng cho những bệnh nhân đang không nơi nương tựa.</p>
                    </header>
                    <ul class="relate">
                        <li class="">
                            <a href="/chu-khu-tro-gia-re-hiep-khung-bi-duoi-danh-sau-vu-hoa-hoan-post877913.html">
                                Chủ khu trọ giá rẻ Hiệp 'Khùng' bị đuổi đánh sau vụ hỏa hoạn</a></li>
                        <li class=" picture">
                            <a href="/ben-trong-hien-truong-vu-chay-gan-benh-vien-nhi-post877881.html">
                                Bên trong hiện trường vụ cháy gần bệnh viện Nhi</a></li>
                    </ul>
                </article>
                <article class=" hasvideo noads" topic-id="2000,2208,2369,4150,4223,4614">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/dieu-gi-da-dien-ra-trong-dem-nhac-hoi-co-7-nguoi-chet-o-ho-tay-post877611.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/ofh_cgmzstgk/2018_09_17/nhacnheo.jpg" alt="Dieu gi da dien ra trong dem nhac hoi co 7 nguoi chet o ho Tay? hinh anh" title="Điều gì đã diễn ra trong đêm nhạc hội có 7 người chết ở hồ Tây? hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/dieu-gi-da-dien-ra-trong-dem-nhac-hoi-co-7-nguoi-chet-o-ho-tay-post877611.html">
                                Điều gì đã diễn ra trong đêm nhạc hội có 7 người chết ở hồ Tây?
                            </a>
                            <span class="comment_count">20</span>
                        </p>
                        <time datetime="2018-09-19 06:33+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article class="" topic-id="2000,4181,4182">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/chiec-hop-pandora-da-mo-ra-khi-tt-moon-gap-lanh-dao-kim-lan-thu-3-post878085.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/pgi_gehatuvrh/2018_09_19/zing_korea_3.jpg" alt="&#39;Chiec hop Pandora&#39; da mo ra khi TT Moon gap lanh dao Kim lan thu 3 hinh anh" title="&#39;Chiếc hộp Pandora&#39; đã mở ra khi TT Moon gặp lãnh đạo Kim lần thứ 3 hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/chiec-hop-pandora-da-mo-ra-khi-tt-moon-gap-lanh-dao-kim-lan-thu-3-post878085.html">
                                'Chiếc hộp Pandora' đã mở ra khi TT Moon gặp lãnh đạo Kim lần thứ 3
                            </a>
                        </p>
                        <time datetime="2018-09-19 17:14+0700"></time>
                        <p class="cate">Thế giới</p>
                    </header>
                </article>
                <article class="" topic-id="2000,2020,2369">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/cau-chuyen-ky-la-ve-nguoi-sinh-ra-o-tuoi-70-va-chet-di-la-dua-tre-post877977.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_esfszlt/2018_09_18/Button_gip_thumb.jpg" alt="Cau chuyen ky la ve nguoi sinh ra o tuoi 70 va chet di la dua tre hinh anh" title="Câu chuyện kỳ lạ về người sinh ra ở tuổi 70 và chết đi là đứa trẻ hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/cau-chuyen-ky-la-ve-nguoi-sinh-ra-o-tuoi-70-va-chet-di-la-dua-tre-post877977.html">
                                Câu chuyện kỳ lạ về người sinh ra ở tuổi 70 và chết đi là đứa trẻ
                            </a>
                            <span class="comment_count">5</span>
                        </p>
                        <time datetime="2018-09-19 12:00+0700"></time>
                        <p class="cate">Tin tức xuất bản</p>
                    </header>
                </article>
                <article class="" topic-id="2000,2207,3399">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/tranh-ket-xe-ngap-nuoc-o-sai-gon-qua-zalo-post877742.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/kbd_ivdb/2018_09_18/Anh_Thumb.jpg" alt="Tranh ket xe, ngap nuoc o Sai Gon qua Zalo hinh anh" title="Tránh kẹt xe, ngập nước ở Sài Gòn qua Zalo hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/tranh-ket-xe-ngap-nuoc-o-sai-gon-qua-zalo-post877742.html">
                                Tránh kẹt xe, ngập nước ở Sài Gòn qua Zalo
                            </a>
                        </p>
                        <time datetime="2018-09-19 09:26+0700"></time>
                        <p class="cate">Đô thị</p>
                    </header>
                </article>
                <article class=" hasvideo haschart" topic-id="2000,2209,3991">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/vi-sao-cuu-chanh-van-phong-thanh-uy-da-nang-bi-bat-post877942.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/jugtzb/2018_09_18/b6_edited.jpg" alt="Vi sao cuu Chanh van phong Thanh uy Da Nang bi bat? hinh anh" title="Vì sao cựu Chánh văn phòng Thành ủy Đà Nẵng bị bắt? hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/vi-sao-cuu-chanh-van-phong-thanh-uy-da-nang-bi-bat-post877942.html">
                                Vì sao cựu Chánh văn phòng Thành ủy Đà Nẵng bị bắt?
                            </a>
                        </p>
                        <time datetime="2018-09-19 11:23+0700"></time>
                        <p class="cate">Vụ án</p>
                    </header>
                </article>
                <article class=" hasvideo" topic-id="2000,3641,3909,4182">
                    <p class="type"></p>
                    <div class="cover">
                        <a href="/van-bai-mao-hiem-cua-my-han-voi-trieu-tien-chuyen-bien-tich-cuc-post878040.html">
                            <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_xqymrk/2018_09_19/northkoreasleaderkimjongunlooksatuspresidentdonaldtrumpbeforetheirmeetinginsingapore1_thumb.jpg" alt="Van bai mao hiem cua My - Han voi Trieu Tien chuyen bien tich cuc hinh anh" title="Ván bài mạo hiểm của Mỹ - Hàn với Triều Tiên chuyển biến tích cực hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/van-bai-mao-hiem-cua-my-han-voi-trieu-tien-chuyen-bien-tich-cuc-post878040.html">
                                Ván bài mạo hiểm của Mỹ - Hàn với Triều Tiên chuyển biến tích cực
                            </a>
                        </p>
                        <time datetime="2018-09-19 14:38+0700"></time>
                        <p class="cate">Thế giới</p>
                    </header>
                </article>
            </section>
            <section class="trending scroll">
                <div class="top-list">
                    <article class="" topic-id="2001,2020,2209,4150">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/vu-2-me-con-du-khach-tu-vong-nguoi-chong-da-hoi-tinh-post878198.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_glyrtla/2018_09_19/bvdn.jpg" alt="Vu 2 me con du khach tu vong: Nguoi chong da hoi tinh hinh anh" title="Vụ 2 mẹ con du khách tử vong: Người chồng đã hồi tỉnh hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/vu-2-me-con-du-khach-tu-vong-nguoi-chong-da-hoi-tinh-post878198.html">
                                    Vụ 2 mẹ con du khách tử vong: Người chồng đã hồi tỉnh
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:55+0700"></time>
                            <p class="cate">Thời sự</p>
                        </header>
                    </article>
                </div>
                <article class=" stream" topic-id="2001,2020,3751,4049">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/thang-hagl-5-3-clb-ha-noi-lap-them-ky-luc-o-vleague-post877952.html">
                                Thắng HAGL 5-3, CLB Hà Nội lập thêm kỷ lục ở V.League
                            </a>
                            <span class="comment_count">12</span>
                        </p>
                        <time datetime="2018-09-19 16:19+0700"></time>
                        <p class="cate">Bóng đá Việt Nam</p>
                    </header>
                </article>
                <article class="" topic-id="2001,2020,4520,4521,4522">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/sau-khi-xuat-vien-mai-phuong-sang-tung-kinh-dem-ho-va-mat-ngu-post878199.html">
                                Sau khi xuất viện, Mai Phương sáng tụng kinh, đêm ho và mất ngủ
                            </a>
                        </p>
                        <time datetime="2018-09-19 19:07+0700"></time>
                        <p class="cate">Sao Việt</p>
                    </header>
                </article>
                <article class="" topic-id="2001,2020,2208,2225,2369,2657,4150,4441">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/tai-xe-lexus-bien-8888-bi-tong-chet-khi-dung-xe-theo-hieu-lenh-csgt-post877853.html">
                                Tài xế Lexus biển 8888 bị tông chết khi dừng xe theo hiệu lệnh CSGT
                            </a>
                            <span class="comment_count">92</span>
                        </p>
                        <time datetime="2018-09-19 08:54+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article class="" topic-id="2020,3712,3919,4590,4613">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/co-gai-tang-hoa-cho-ong-trump-hoa-hau-tieu-vy-dep-ngoan-ngay-tho-post878191.html">
                                Cô gái tặng hoa cho ông Trump: 'Hoa hậu Tiểu Vy đẹp, ngoan, ngây thơ'
                            </a>
                        </p>
                        <time datetime="2018-09-19 19:18+0700"></time>
                        <p class="cate">Sao Việt</p>
                    </header>
                </article>
                <article class=" picture" topic-id="2020,4440">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/day-la-ly-do-nguoi-my-khong-con-ua-chuong-sedan-post878079.html">
                                Đây là lý do người Mỹ không còn ưa chuộng sedan
                            </a>
                        </p>
                        <time datetime="2018-09-19 19:07+0700"></time>
                        <p class="cate">Xe 360</p>
                    </header>
                </article>
                <article class="" topic-id="2020,3666">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/tuan-hung-toi-nhieu-hit-nhat-nhung-cay-dang-khong-dung-dau-bxh-post878126.html">
                                Tuấn Hưng: ‘Tôi nhiều hit nhất nhưng cay đắng không đứng đầu BXH’
                            </a>
                            <span class="comment_count">14</span>
                        </p>
                        <time datetime="2018-09-19 15:04+0700"></time>
                        <p class="cate">Âm nhạc</p>
                    </header>
                </article>
                <article class="" topic-id="2020,3474,4494">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/10-tinh-nang-an-tuyet-voi-tren-ios-12-post878124.html">
                                10 tính năng ẩn tuyệt vời trên iOS 12
                            </a>
                        </p>
                        <time datetime="2018-09-19 19:11+0700"></time>
                        <p class="cate">Công nghệ</p>
                    </header>
                </article>
                <article class="" topic-id="2020,4084">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/pham-bang-bang-bi-hang-loat-thuong-hieu-quoc-te-tay-chay-post878130.html">
                                Phạm Băng Băng bị hàng loạt thương hiệu quốc tế tẩy chay
                            </a>
                        </p>
                        <time datetime="2018-09-19 14:53+0700"></time>
                        <p class="cate">Thời trang sao</p>
                    </header>
                </article>
                <article class=" hasvideo" topic-id="2020">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/hagl-gio-phai-lo-tru-hang-sau-tran-thua-clb-ha-noi-post878222.html">
                                ‘HAGL giờ phải lo trụ hạng sau trận thua CLB Hà Nội’
                            </a>
                        </p>
                        <time datetime="2018-09-19 19:58+0700"></time>
                        <p class="cate">Bóng đá Việt Nam</p>
                    </header>
                </article>
                <article class=" hasvideo" topic-id="2020,3641,3907,4617">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/tt-moon-ngoai-giao-nha-hang-tu-pho-vn-toi-hai-san-tai-trieu-tien-post878167.html">
                                TT Moon ‘ngoại giao nhà hàng’ - từ phở VN tới hải sản tại Triều Tiên
                            </a>
                        </p>
                        <time datetime="2018-09-19 18:02+0700"></time>
                        <p class="cate">Thế giới</p>
                    </header>
                </article>
                <article class="" topic-id="2020,4258">
                    <p class="type"></p>
                    <header>
                        <p class="title">
                            <a href="/canh-sat-vay-bat-nhom-trom-trung-quoc-chuyen-pha-ket-sat-post878160.html">
                                Cảnh sát vây bắt nhóm trộm Trung Quốc chuyên phá két sắt
                            </a>
                        </p>
                        <time datetime="2018-09-19 19:31+0700"></time>
                        <p class="cate">Pháp luật</p>
                    </header>
                </article>
                <script>
                    var elements = $('.top-list article').length;
                    $($('.top-list article')[Math.floor(Math.random() * elements)]).show();
                </script>
            </section>
        </div>
        <section class="sidebar">
            <div id="advR1" class="banner"></div>
            <div id="advR2" class="banner"></div>
            <div class="contact">
                <ul>
                    <li class="email">
                        <span>Email</span>
                        <a href="mailto:toasoan@zing.vn" title="Gửi email">toasoan@zing.vn</a>
                        | <a href="javascript:showBoxAds();" title="Liên hệ quảng cáo">Liên hệ Quảng cáo</a>
                    </li>
                    <li class="phone">
                        <span>Đường dây nóng</span>
                        <a href="javascript:showPhoneBox();" title="Điện thoại nóng">(HN) 0985.57.88.55</a> |
                        <a href="javascript:showPhoneBox();" title="Điện thoại nóng">(HCM) 0909.18.66.66</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="multi" class="section">
            <header>
                <h2>MULTIMEDIA</h2>
                <ul>
                    <li><a href="/video/">VIDEO</a></li>
                    <li><a href="/long-form-tieu-diem.html">LONGFORM</a></li>
                    <li><a href="/voices-goc-nhin-tieu-diem.html">VOICES</a></li>
                    <li><a href="/trac-nghiem-quizz-tieu-diem.html">QUIZZ</a></li>
                    <li><a href="/lens-tieu-diem.html">LENS</a></li>
                </ul>
            </header>
            <div class="article-list magazine-layout2">
                <article article-id="877659" class="article-item type-picture" topic-id="2002,4465">
                    <p class="article-thumbnail">
                        <a href="/nhat-ban-khac-la-hoang-tan-duoi-ong-kinh-nhiep-anh-gia-phap-post877659.html" title="Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/mdf_eioxrd/2018_09_17/2.jpg" alt="Nhat Ban khac la, hoang tan duoi ong kinh nhiep anh gia Phap hinh anh" title="Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp" href="/nhat-ban-khac-la-hoang-tan-duoi-ong-kinh-nhiep-anh-gia-phap-post877659.html" title="Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp#detail0">
                                Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">19:48</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/dia-diem-du-lich.html" title="Địa điểm du lịch">
                                Địa điểm du lịch
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='False'>0</span>
                        </p>
                        <p class="article-summary">Hình ảnh những khách sạn, công viên giải trí hay câu lạc bộ thoát y bị bỏ hoang phản ánh một khía cạnh khác của Nhật Bản - đất nước công nghệ cao, sạch sẽ nhất thế giới.</p>
                    </header>
                </article>
                <article article-id="878093" class="article-item type-picture" topic-id="2002,3864">
                    <p class="article-thumbnail">
                        <a href="/loat-chi-tiet-thu-vi-goi-mo-tu-trailer-dau-tien-cua-captain-marvel-post878093.html" title="Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel&#39;">
                            <img src="https://znews-gif-td.zadn.vn/Uploaded/xbhunku/2018_09_19/ezgif1270bd25f97.gif" alt="Loat chi tiet thu vi, goi mo tu trailer dau tien cua ‘Captain Marvel&#39; hinh anh" title="Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel&#39; hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel&#39;" href="/loat-chi-tiet-thu-vi-goi-mo-tu-trailer-dau-tien-cua-captain-marvel-post878093.html" title="Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel&#39;#detail0">
                                Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel'
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">14:43</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/phim-chieu-rap.html" title="Phim chiếu rạp">
                                Phim chiếu rạp
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='True'>6</span>
                        </p>
                        <p class="article-summary">Rất nhiều điều thú vị và gây tò mò cho khán giả đã xuất hiện trong đoạn phim quảng cáo đầu tiên của “Captain Marvel”.</p>
                    </header>
                </article>
                <article article-id="876836" class="article-item type-hasvideo" topic-id="2002,3546,3817">
                    <p class="article-thumbnail">
                        <a href="/ninh-duong-lan-ngoc-bo-dong-phim-2-nam-vi-tin-don-lam-gai-post876836.html" title="Ninh Dương Lan Ngọc: &#39;Bỏ đóng phim 2 năm vì tin đồn làm gái&#39;">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/spuocaw/2018_09_14/Thumb.jpg" alt="Ninh Duong Lan Ngoc: &#39;Bo dong phim 2 nam vi tin don lam gai&#39; hinh anh" title="Ninh Dương Lan Ngọc: &#39;Bỏ đóng phim 2 năm vì tin đồn làm gái&#39; hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Ninh Dương Lan Ngọc: &#39;Bỏ đóng phim 2 năm vì tin đồn làm gái&#39;" href="/ninh-duong-lan-ngoc-bo-dong-phim-2-nam-vi-tin-don-lam-gai-post876836.html" title="Ninh Dương Lan Ngọc: &#39;Bỏ đóng phim 2 năm vì tin đồn làm gái&#39;#detail0">
                                Ninh Dương Lan Ngọc: 'Bỏ đóng phim 2 năm vì tin đồn làm gái'
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">08:45</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/sao-viet.html" title="Sao Việt">
                                Sao Việt
                            </a>
                            <span class="comment-count" visible='True'>6</span>
                            <span class="viral-count" visible='True'>4</span>
                        </p>
                        <p class="article-summary">Nữ diễn viên thuộc thế hệ 9X có những năm đầu tiên làm nghề không suôn sẻ, phải tự thân đương đầu với "bão tố", trong đó có loạt tin đồn "làm gái".</p>
                    </header>
                </article>
                <article article-id="878148" class="article-item type-picture" topic-id="2002,2008,3918">
                    <p class="article-thumbnail">
                        <a href="/hai-nguoi-mau-viet-trinh-dien-o-london-fashion-week-post878148.html" title="Hai người mẫu Việt trình diễn ở London Fashion Week">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/OpluOAA/2018_09_19/42058891_1064696103692246_8929183918293254144_n_thumb.jpg" alt="Hai nguoi mau Viet trinh dien o London Fashion Week hinh anh" title="Hai người mẫu Việt trình diễn ở London Fashion Week hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Hai người mẫu Việt trình diễn ở London Fashion Week" href="/hai-nguoi-mau-viet-trinh-dien-o-london-fashion-week-post878148.html" title="Hai người mẫu Việt trình diễn ở London Fashion Week#detail0">
                                Hai người mẫu Việt trình diễn ở London Fashion Week
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">15:50</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/thoi-trang-sao.html" title="Thời trang sao">
                                Thời trang sao
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='False'>0</span>
                        </p>
                        <p class="article-summary">Chà Mi và Thanh Thảo là hai chân dài có cơ hội sải bước trên sàn diễn London Fashion Week mùa xuân hè 2019. </p>
                    </header>
                </article>
                <article article-id="877948" class="article-item type-hasvideo" topic-id="2002,3639,3934,4008,4294">
                    <p class="article-thumbnail">
                        <a href="/vuot-dinh-bernabeu-kham-pha-nou-camp-o-tay-ban-nha-post877948.html" title="Vượt đỉnh Bernabeu, khám phá Nou Camp ở Tây Ban Nha">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/lerl/2018_09_18/bbbb.jpg" alt="Vuot dinh Bernabeu, kham pha Nou Camp o Tay Ban Nha hinh anh" title="Vượt đỉnh Bernabeu, khám phá Nou Camp ở Tây Ban Nha hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Vượt đỉnh Bernabeu, khám phá Nou Camp ở Tây Ban Nha" href="/vuot-dinh-bernabeu-kham-pha-nou-camp-o-tay-ban-nha-post877948.html" title="Vượt đỉnh Bernabeu, khám phá Nou Camp ở Tây Ban Nha#detail0">
                                Vượt đỉnh Bernabeu, khám phá Nou Camp ở Tây Ban Nha
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">11:08</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/bong-da-tay-ban-nha.html" title="Bóng đá Tây Ban Nha">
                                Bóng đá Tây Ban Nha
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='True'>200</span>
                        </p>
                        <p class="article-summary">Tới sân vận động Bernabeu của Real Madrid và Nou Camp của CLB Barcelona, du khách được tham quan phòng thay đồ, cabin bình luận bóng đá hoặc ngồi vào băng ghế chỉ đạo của HLV.</p>
                    </header>
                </article>
                <article article-id="878023" class="article-item type-picture type-hasvideo" topic-id="2002,3907,4181,4182">
                    <p class="article-thumbnail">
                        <a href="/nhung-khoanh-khac-sau-ngay-gap-dau-giua-ong-moon-va-kim-jong-un-post878023.html" title="Những khoảnh khắc sau ngày gặp đầu giữa ông Moon và Kim Jong Un">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/mdf_xqymrk/2018_09_19/lien_trieu_5.jpg" alt="Nhung khoanh khac sau ngay gap dau giua ong Moon va Kim Jong Un hinh anh" title="Những khoảnh khắc sau ngày gặp đầu giữa ông Moon và Kim Jong Un hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Những khoảnh khắc sau ngày gặp đầu giữa ông Moon và Kim Jong Un" href="/nhung-khoanh-khac-sau-ngay-gap-dau-giua-ong-moon-va-kim-jong-un-post878023.html" title="Những khoảnh khắc sau ngày gặp đầu giữa ông Moon và Kim Jong Un#detail0">
                                Những khoảnh khắc sau ngày gặp đầu giữa ông Moon và Kim Jong Un
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">08:38</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/the-gioi.html" title="Thế giới">
                                Thế giới
                            </a>
                            <span class="comment-count" visible='False'>0</span>
                            <span class="viral-count" visible='True'>6</span>
                        </p>
                        <p class="article-summary">Tại hội nghị liên Triều, ông Kim Jong Un cảm ơn nỗ lực của Tổng thống Hàn Quốc Moon Jae In và bày tỏ mong muốn thúc đẩy đàm phán phi hạt nhân hóa giúp ổn định khu vực.</p>
                    </header>
                </article>
                <article article-id="877999" class="article-item type-picture type-hasvideo" topic-id="2002,3851,3934">
                    <p class="article-thumbnail">
                        <a href="/cham-diem-barcelona-4-0-psv-messi-xung-dang-nhan-diem-10-post877999.html" title="Chấm điểm Barcelona 4-0 PSV: Messi xứng đáng nhận điểm 10">
                            <img src="https://znews-photo-td.zadn.vn/w660/Uploaded/pgi_ubnvgunau/2018_09_19/dsadasdsd.JPG" alt="Cham diem Barcelona 4-0 PSV: Messi xung dang nhan diem 10 hinh anh" title="Chấm điểm Barcelona 4-0 PSV: Messi xứng đáng nhận điểm 10 hình ảnh">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a title="Chấm điểm Barcelona 4-0 PSV: Messi xứng đáng nhận điểm 10" href="/cham-diem-barcelona-4-0-psv-messi-xung-dang-nhan-diem-10-post877999.html" title="Chấm điểm Barcelona 4-0 PSV: Messi xứng đáng nhận điểm 10#detail0">
                                Chấm điểm Barcelona 4-0 PSV: Messi xứng đáng nhận điểm 10
                            </a>
                        </p>
                        <p class="article-meta">
<span class="article-publish">
<span class="time">05:54</span>
<span class="date">19/09/2018</span>
</span>
                            <a class="article-category" href="/cup-chau-au.html" title="Cup Châu Âu">
                                Cup Châu Âu
                            </a>
                            <span class="comment-count" visible='True'>25</span>
                            <span class="viral-count" visible='True'>27</span>
                        </p>
                        <p class="article-summary">Với cú hat-trick vào lưới PSV ở lượt trận mở màn vòng bảng Champions League 2018/19, Lionel Messi xứng đáng nhận điểm 10 từ Whoscored.</p>
                    </header>
                </article>
            </div>
        </section>
        <div class="content-wrap">
            <div class="content-wrap">
                <section id="thoi-su" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/thoi-su.html" title="Thời sự">Thời sự </a></h2>
                        </hgroup>
                        <p>
                            <a href='/giao-thong.html'>Giao thông</a>
                        </p>
                        <p>
                            <a href='/do-thi.html'>Đô thị</a>
                        </p>
                        <p>
                            <a href='/doi-song.html'>Đời sống</a>
                        </p>
                        <p>
                            <a href='/quoc-phong.html'>Quốc phòng</a>
                        </p>
                        <p>
                            <a href='/anh-video-thoi-su.html'>Ảnh & Video</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="2208,4226,4616">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/khoi-den-xuat-hien-tro-lai-tai-hien-truong-vu-chay-o-de-la-thanh-post878201.html">
                                    Khói đen xuất hiện trở lại tại hiện trường vụ cháy ở Đê La Thành
                                </a>
                            </p>
                            <time datetime="2018-09-19 20:18+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/khoi-den-xuat-hien-tro-lai-tai-hien-truong-vu-chay-o-de-la-thanh-post878201.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/lce_jwqcz/2018_09_19/MINT5740CR2.jpg" alt="Khoi den xuat hien tro lai tai hien truong vu chay o De La Thanh hinh anh" title="Khói đen xuất hiện trở lại tại hiện trường vụ cháy ở Đê La Thành hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Hai ngày sau vụ cháy thiêu rụi hàng chục ngôi nhà trên đường Đê La Thành (Ba Đình, Hà Nội), trưa 19/9, khói đen xuất hiện trở lại tại một căn nhà bên ở hiện trường vụ việc.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/chu-khu-tro-gia-re-hiep-khung-bi-duoi-danh-sau-vu-hoa-hoan-post877913.html">
                                    Chủ khu trọ giá rẻ Hiệp 'Khùng' bị đuổi đánh sau vụ hỏa hoạn</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4619,4282,2207">
                            <header>
                                <p class="title">
                                    <a href="/de-xuat-lap-them-nhieu-pho-di-bo-o-sai-gon-post878091.html">
                                        Đề xuất lập thêm nhiều phố đi bộ ở Sài Gòn
                                    </a>
                                </p>
                                <time datetime="2018-09-19 19:04+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2238,4150">
                            <header>
                                <p class="title">
                                    <a href="/dau-dau-xe-khach-2-thanh-nien-tu-vong-post878112.html">
                                        Đấu đầu xe khách, 2 thanh niên tử vong
                                    </a>
                                </p>
                                <time datetime="2018-09-19 17:01+0700"></time>
                            </header>
                        </article>
                        <article class=" haschart" topic-id="2222,4150">
                            <header>
                                <p class="title">
                                    <a href="/cay-nga-de-chet-hai-me-con-dang-ngu-post878128.html">
                                        Cây ngã đè chết hai mẹ con đang ngủ
                                    </a>
                                </p>
                                <time datetime="2018-09-19 15:29+0700"></time>
                            </header>
                        </article>
                        <article class=" haschart" topic-id="2223,3880">
                            <header>
                                <p class="title">
                                    <a href="/tim-thay-thi-the-be-trai-mat-tich-o-phu-quoc-post878122.html">
                                        Tìm thấy thi thể bé trai mất tích ở Phú Quốc
                                    </a>
                                </p>
                                <time datetime="2018-09-19 15:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="4150,4592">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/lam-sao-ngan-chan-su-dung-chat-kich-thich-tai-le-hoi-am-nhac-post877803.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/bpivpbbp/2018_09_18/cv1.jpg" alt="Lam sao ngan chan su dung chat kich thich tai le hoi am nhac? hinh anh" title="Làm sao ngăn chặn sử dụng chất kích thích tại lễ hội âm nhạc? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/lam-sao-ngan-chan-su-dung-chat-kich-thich-tai-le-hoi-am-nhac-post877803.html">
                                    Làm sao ngăn chặn sử dụng chất kích thích tại lễ hội âm nhạc?
                                </a>
                            </p>
                            <time datetime="2018-09-19 12:00+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="the-gioi" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/the-gioi.html" title="Thế giới">Thế giới </a></h2>
                        </hgroup>
                        <p>
                            <a href='/anh-video-the-gioi.html'>Ảnh & Video</a>
                        </p>
                        <p>
                            <a href='/quan-su-the-gioi.html'>Quân sự</a>
                        </p>
                        <p>
                            <a href='/tu-lieu-the-gioi.html'>Tư liệu</a>
                        </p>
                        <p>
                            <a href='/phan-tich-the-gioi.html'>Phân tích</a>
                        </p>
                        <p>
                            <a href='/nguoi-viet-4-phuong.html'>Người Việt 4 phương</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="4151">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/malaysia-bat-giu-cuu-thu-tuong-najib-vi-be-boi-bien-thu-nhieu-ty-usd-post878157.html">
                                    Malaysia bắt giữ cựu thủ tướng Najib vì bê bối biển thủ nhiều tỷ USD
                                </a>
                            </p>
                            <time datetime="2018-09-19 16:37+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/malaysia-bat-giu-cuu-thu-tuong-najib-vi-be-boi-bien-thu-nhieu-ty-usd-post878157.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/znguhv/2018_09_19/a6928e60d14749bf80ad550f417d3a07.jpg" alt="Malaysia bat giu cuu thu tuong Najib vi be boi bien thu nhieu ty USD hinh anh" title="Malaysia bắt giữ cựu thủ tướng Najib vì bê bối biển thủ nhiều tỷ USD hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Cơ quan chống tham nhũng Malaysia thông báo cựu thủ tướng Najib Razak đã bị bắt vì liên quan đến vụ bê bối quỹ nhà nước 1MDB thời ông còn tại nhiệm.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/cuu-thu-tuong-malaysia-bi-cao-buoc-4-toi-mim-cuoi-khi-toi-toa-post857191.html">
                                    Cựu thủ tướng Malaysia bị cáo buộc 4 tội, mỉm cười khi tới tòa</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="3909,4151">
                            <header>
                                <p class="title">
                                    <a href="/dsq-viet-nam-to-chuc-ky-niem-quoc-khanh-tai-washington-dc-post878210.html">
                                        ĐSQ Việt Nam tổ chức kỷ niệm quốc khánh tại Washington D.C.
                                    </a>
                                </p>
                                <time datetime="2018-09-19 19:25+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2000,4181,4182">
                            <header>
                                <p class="title">
                                    <a href="/chiec-hop-pandora-da-mo-ra-khi-tt-moon-gap-lanh-dao-kim-lan-thu-3-post878085.html">
                                        'Chiếc hộp Pandora' đã mở ra khi TT Moon gặp lãnh đạo Kim lần thứ 3
                                    </a>
                                </p>
                                <time datetime="2018-09-19 17:14+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="4602,3906,3835">
                            <header>
                                <p class="title">
                                    <a href="/tau-quan-van-trung-quoc-dut-neo-mac-can-vi-sieu-bao-mangkhut-post878049.html">
                                        Tàu quân vận Trung Quốc đứt neo, mắc cạn vì siêu bão Mangkhut
                                    </a>
                                </p>
                                <time datetime="2018-09-19 14:51+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="2000,3641,3909,4182">
                            <header>
                                <p class="title">
                                    <a href="/van-bai-mao-hiem-cua-my-han-voi-trieu-tien-chuyen-bien-tich-cuc-post878040.html">
                                        Ván bài mạo hiểm của Mỹ - Hàn với Triều Tiên chuyển biến tích cực
                                    </a>
                                </p>
                                <time datetime="2018-09-19 14:38+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside hasvideo" topic-id="2020,3641,3907,4617">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/tt-moon-ngoai-giao-nha-hang-tu-pho-vn-toi-hai-san-tai-trieu-tien-post878167.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/mdf_xqymrk/2018_09_19/moon_1.jpg" alt="TT Moon ‘ngoai giao nha hang’ - tu pho VN toi hai san tai Trieu Tien hinh anh" title="TT Moon ‘ngoại giao nhà hàng’ - từ phở VN tới hải sản tại Triều Tiên hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/tt-moon-ngoai-giao-nha-hang-tu-pho-vn-toi-hai-san-tai-trieu-tien-post878167.html">
                                    TT Moon ‘ngoại giao nhà hàng’ - từ phở VN tới hải sản tại Triều Tiên
                                </a>
                            </p>
                            <time datetime="2018-09-19 18:02+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="kinh-doanh" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/kinh-doanh-tai-chinh.html" title="Kinh doanh">Kinh doanh </a></h2>
                        </hgroup>
                        <p>
                            <a href='/tai-chinh.html'>Tài chính</a>
                        </p>
                        <p>
                            <a href='/chung-khoan.html'>Chứng khoán</a>
                        </p>
                        <p>
                            <a href='/bat-dong-san.html'>Bất động sản</a>
                        </p>
                        <p>
                            <a href='/doanh-nhan.html'>Doanh nhân</a>
                        </p>
                    </header>
                    <article class="featured haschart" >
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/moi-lo-tin-dung-bat-dong-san-nup-bong-vay-tieu-dung-post878147.html">
                                    Mối lo tín dụng bất động sản núp bóng vay tiêu dùng
                                </a>
                            </p>
                            <time datetime="2018-09-19 16:29+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/moi-lo-tin-dung-bat-dong-san-nup-bong-vay-tieu-dung-post878147.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/aohunkx/2018_09_19/Imperia_Garden_2.jpg" alt="Moi lo tin dung bat dong san nup bong vay tieu dung hinh anh" title="Mối lo tín dụng bất động sản núp bóng vay tiêu dùng hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Tín dụng tiêu dùng tăng nhanh chủ yếu đến từ hoạt động cho vay mua, sửa nhà khiến nhiều người lo ngại về nguy cơ cho vay bất động sản đang núp bóng vay tiêu dùng ngày một lớn.</p>
                        <ul class="relate">
                            <li class=" haschart">
                                <a href="/tin-dung-bat-dong-san-co-di-kem-voi-no-xau-post877575.html">
                                    Tín dụng bất động sản có đi kèm với nợ xấu?</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4077,4151">
                            <header>
                                <p class="title">
                                    <a href="/chinh-phu-siet-dai-su-dat-dai-khi-co-phan-hoa-post878221.html">
                                        Chính phủ siết ‘đại sự đất đai’ khi cổ phần hóa
                                    </a>
                                </p>
                                <time datetime="2018-09-19 19:53+0700"></time>
                            </header>
                        </article>
                        <article class=" advertising" >
                            <header>
                                <p class="title">
                                    <a href="/ceo-pham-van-tam-thay-doi-nhan-dien-thuong-hieu-de-vuon-len-dan-dau-post878177.html">
                                        CEO Phạm Văn Tam: 'Thay đổi nhận diện thương hiệu để vươn lên dẫn đầu'
                                    </a>
                                </p>
                                <time datetime="2018-09-19 17:00+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3783">
                            <header>
                                <p class="title">
                                    <a href="/facebook-vung-tien-mua-ban-quyen-the-thao-toan-cau-post878118.html">
                                        Facebook vung tiền mua bản quyền thể thao toàn cầu
                                    </a>
                                </p>
                                <time datetime="2018-09-19 14:42+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2000,2207,4261">
                            <header>
                                <p class="title">
                                    <a href="/new-city-thu-thiem-du-an-tai-dinh-cu-hay-nha-o-thuong-mai-post876643.html">
                                        New City Thủ Thiêm, dự án tái định cư hay nhà ở thương mại?
                                    </a>
                                </p>
                                <time datetime="2018-09-19 13:02+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="4230">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/khi-nao-duoc-xoa-lich-su-no-xau-khoan-vay-duoi-10-trieu-dong-post878229.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/ofh_tazsbtgo/2018_09_19/vay_tieu_dung1526714319width800height535.jpg" alt="Khi nao duoc xoa lich su no xau khoan vay duoi 10 trieu dong? hinh anh" title="Khi nào được xóa lịch sử nợ xấu khoản vay dưới 10 triệu đồng? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/khi-nao-duoc-xoa-lich-su-no-xau-khoan-vay-duoi-10-trieu-dong-post878229.html">
                                    Khi nào được xóa lịch sử nợ xấu khoản vay dưới 10 triệu đồng?
                                </a>
                            </p>
                            <time datetime="2018-09-19 20:11+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="phap-luat" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/phap-luat.html" title="Pháp luật">Pháp luật </a></h2>
                        </hgroup>
                        <p>
                            <a href='/phap-dinh.html'>Pháp đình</a>
                        </p>
                        <p>
                            <a href='/vu-an.html'>Vụ án</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="2020,4258">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/canh-sat-vay-bat-nhom-trom-trung-quoc-chuyen-pha-ket-sat-post878160.html">
                                    Cảnh sát vây bắt nhóm trộm Trung Quốc chuyên phá két sắt
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:31+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/canh-sat-vay-bat-nhom-trom-trung-quoc-chuyen-pha-ket-sat-post878160.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/jopltui/2018_09_19/tromtq.jpg" alt="Canh sat vay bat nhom trom Trung Quoc chuyen pha ket sat hinh anh" title="Cảnh sát vây bắt nhóm trộm Trung Quốc chuyên phá két sắt hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Cấu kết với một số người Việt, nhóm trộm Trung Quốc nhiều lần đột nhập vào các doanh nghiệp, trạm BOT phá két sắt lấy cắp hơn 4,5 tỷ đồng.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/nhom-trom-xuyen-quoc-gia-danh-cap-hon-4-ty-dong-post877240.html">
                                    Nhóm trộm xuyên quốc gia đánh cắp hơn 4 tỷ đồng</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" haschart" topic-id="3880,2223">
                            <header>
                                <p class="title">
                                    <a href="/bat-giam-can-bo-lam-quyen-lien-quan-den-dat-dai-o-phu-quoc-post878200.html">
                                        Bắt giam cán bộ lạm quyền liên quan đến đất đai ở Phú Quốc
                                    </a>
                                </p>
                                <time datetime="2018-09-19 20:23+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="2211">
                            <header>
                                <p class="title">
                                    <a href="/linh-an-tu-treo-vi-cho-vay-nang-lai-post878186.html">
                                        Lĩnh án tù treo vì cho vay nặng lãi
                                    </a>
                                </p>
                                <time datetime="2018-09-19 20:00+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4150">
                            <header>
                                <p class="title">
                                    <a href="/9x-dam-chet-vo-linh-an-chung-than-post878141.html">
                                        9X đâm chết vợ lĩnh án chung thân
                                    </a>
                                </p>
                                <time datetime="2018-09-19 18:50+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4592">
                            <header>
                                <p class="title">
                                    <a href="/tien-si-dom-lua-tien-ty-bang-du-an-ma-post877764.html">
                                        Tiến sĩ dởm lừa tiền tỷ bằng dự án 'ma'
                                    </a>
                                </p>
                                <time datetime="2018-09-19 15:13+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="2221,2245,4150,4592">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/bat-3-nguoi-dan-ong-mang-18000-vien-ma-tuy-vao-khach-san-post878204.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/qhj_dvoahficbu/2018_09_19/thu.jpg" alt="Bat 3 nguoi dan ong mang 18.000 vien ma tuy vao khach san hinh anh" title="Bắt 3 người đàn ông mang 18.000 viên ma túy vào khách sạn hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/bat-3-nguoi-dan-ong-mang-18000-vien-ma-tuy-vao-khach-san-post878204.html">
                                    Bắt 3 người đàn ông mang 18.000 viên ma túy vào khách sạn
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:41+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="xuat-ban" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/xuat-ban.html" title="Xuất bản">Xuất bản </a></h2>
                        </hgroup>
                        <p>
                            <a href='/tin-tuc-xuat-ban.html'>Tin tức xuất bản</a>
                        </p>
                        <p>
                            <a href='/sach-hay.html'>Sách hay</a>
                        </p>
                        <p>
                            <a href='/tac-gia.html'>Tác giả</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="2000,2020,2369">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/cau-chuyen-ky-la-ve-nguoi-sinh-ra-o-tuoi-70-va-chet-di-la-dua-tre-post877977.html">
                                    Câu chuyện kỳ lạ về người sinh ra ở tuổi 70 và chết đi là đứa trẻ
                                </a>
                                <span class="comment_count">5</span>
                            </p>
                            <time datetime="2018-09-19 12:00+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/cau-chuyen-ky-la-ve-nguoi-sinh-ra-o-tuoi-70-va-chet-di-la-dua-tre-post877977.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_esfszlt/2018_09_18/Button_gip_thumb.jpg" alt="Cau chuyen ky la ve nguoi sinh ra o tuoi 70 va chet di la dua tre hinh anh" title="Câu chuyện kỳ lạ về người sinh ra ở tuổi 70 và chết đi là đứa trẻ hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">"Cuộc sống sẽ chắc chắn vui vẻ hơn nếu chúng ta có thể sinh ra ở tuổi 80 và dần dần đi đến tuổi 18” - Mark Twain.
                        </p>
                        <ul class="relate">
                            <li class="">
                                <a href="/co-be-11-tuoi-bi-bat-coc-cuong-hiep-la-nguyen-mau-trong-lolita-post877404.html">
                                    Cô bé 11 tuổi bị bắt cóc, cưỡng hiếp là nguyên mẫu trong ‘Lolita’?</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4017">
                            <header>
                                <p class="title">
                                    <a href="/thien-duong-sach-o-paris-post877376.html">
                                        Thiên đường sách ở Paris
                                    </a>
                                </p>
                                <time datetime="2018-09-19 05:00+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" >
                            <header>
                                <p class="title">
                                    <a href="/su-thoi-thop-cua-pho-post877437.html">
                                        Sự thoi thóp của phố
                                    </a>
                                </p>
                                <time datetime="2018-09-18 10:21+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/co-mot-tho-au-ma-benh-vien-bach-mai-nhu-mot-cong-vien-dep-post877434.html">
                                        Có một thơ ấu mà 'bệnh viện Bạch Mai như một công viên đẹp'
                                    </a>
                                </p>
                                <time datetime="2018-09-18 06:38+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/hoa-than-thanh-cac-nhan-vat-van-hoc-the-ky-xix-de-thoat-khoi-thuc-tai-post877363.html">
                                        Hóa thân thành các nhân vật văn học thế kỷ XIX để thoát khỏi thực tại
                                    </a>
                                </p>
                                <time datetime="2018-09-18 05:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " >
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/xom-bo-giau-va-nhung-cau-chuyen-day-nhiem-mau-ve-lang-que-post877847.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/ofh_cgkztmzt/2018_09_18/langque.jpg" alt="‘Xom Bo Giau’ va nhung cau chuyen day nhiem mau ve lang que hinh anh" title="‘Xóm Bờ Giậu’ và những câu chuyện đầy nhiệm màu về làng quê hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/xom-bo-giau-va-nhung-cau-chuyen-day-nhiem-mau-ve-lang-que-post877847.html">
                                    ‘Xóm Bờ Giậu’ và những câu chuyện đầy nhiệm màu về làng quê
                                </a>
                            </p>
                            <time datetime="2018-09-19 11:26+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="the-thao" class="category skin2">
                    <header>
                        <hgroup>
                            <h2><a href="/the-thao.html" title="Thể thao">Thể thao </a></h2>
                            <p>
                                <a href='/the-thao-viet-nam.html'>
                                    Thể thao Việt Nam</a>
                            </p>
                            <p>
                                <a href='/cup-chau-au.html'>
                                    Cup Châu Âu</a>
                            </p>
                            <p>
                                <a href='/the-thao-the-gioi.html'>
                                    Thể thao Thế giới</a>
                            </p>
                            <p>
                                <a href='/bong-da-anh.html'>
                                    Bóng đá Anh</a>
                            </p>
                            <p>
                                <a href='/bong-da-viet-nam.html'>
                                    Bóng đá Việt Nam</a>
                            </p>
                            <p>
                                <a href='/hau-truong-the-thao.html'>
                                    Hậu trường thể thao</a>
                            </p>
                        </hgroup>
                    </header>
                    <article class="featured hasvideo" topic-id="2020">
                        <div class="cover">
                            <a href="/hagl-gio-phai-lo-tru-hang-sau-tran-thua-clb-ha-noi-post878222.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/pgi_ubnvgunau/2018_09_19/phuong11.jpg" alt="‘HAGL gio phai lo tru hang sau tran thua CLB Ha Noi’ hinh anh" title="‘HAGL giờ phải lo trụ hạng sau trận thua CLB Hà Nội’ hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/hagl-gio-phai-lo-tru-hang-sau-tran-thua-clb-ha-noi-post878222.html">
                                    ‘HAGL giờ phải lo trụ hạng sau trận thua CLB Hà Nội’
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:58+0700"></time>
                        </header>
                        <p class="summary">Sau thất bại 3-5 trước CLB Hà Nội ở vòng 23 V.League 2018, HLV Dương Minh Ninh kêu gọi toàn đội HAGL tập trung ở ba trận còn lại.
                        </p>
                    </article>
                    <div class="top">
                        <article class="" topic-id="2020,3575,3994,4157,4294,4527">
                            <div class="cover">
                                <a href="/dinh-trong-nguoi-can-ve-tham-lang-cua-u23-viet-nam-post878024.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/jopluat/2018_09_19/Dinh_Trong_U23.jpg" alt="Dinh Trong - nguoi can ve tham lang cua U23 Viet Nam hinh anh" title="Đình Trọng - người cận vệ thầm lặng của U23 Việt Nam hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/dinh-trong-nguoi-can-ve-tham-lang-cua-u23-viet-nam-post878024.html">
                                        Đình Trọng - người cận vệ thầm lặng của U23 Việt Nam
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Hơn 20 tuổi, đá chính ở CLB mạnh nhất V.League và tuyển quốc gia, Trần Đình Trọng là một trong những chốt chặn đáng tin cậy nhất của bóng đá Việt Nam thời điểm này.</p>
                        </article>
                        <article class=" hasvideo" topic-id="2020,2369">
                            <div class="cover">
                                <a href="/tien-ve-tuan-anh-chac-chan-lo-hen-aff-cup-2018-post878063.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/aopuoax/2018_09_19/tuananh1.jpg" alt="Tien ve Tuan Anh chac chan lo hen AFF Cup 2018 hinh anh" title="Tiền vệ Tuấn Anh chắc chắn lỡ hẹn AFF Cup 2018 hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/tien-ve-tuan-anh-chac-chan-lo-hen-aff-cup-2018-post878063.html">
                                        Tiền vệ Tuấn Anh chắc chắn lỡ hẹn AFF Cup 2018
                                    </a>
                                    <span class="comment_count">57</span>
                                </p>
                            </header>
                            <p class="summary">Theo thông tin của huấn luyện viên Dương Minh Ninh, cầu thủ Nguyễn Tuấn Anh khó kịp bình phục thể lực để dự AFF Cup 2018.</p>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/clb-binh-duong-phan-nan-trong-tai-rut-the-do-khong-dung-post878230.html">
                                        CLB Bình Dương phàn nàn trọng tài rút thẻ đỏ không đúng
                                    </a>
                                </p>
                            </header>
                            <p class="summary">HLV Trần Minh Chiến của đội bóng đất Thủ không phục tấm thẻ đỏ đến từ trọng tài Ngô Duy Lân dành cho Tô Văn Vũ ở những phút cuối trận gặp CLB Cần Thơ tại vòng 23 V.League 2018.</p>
                        </article>
                        <article class=" video" >
                            <header>
                                <p class="title">
                                    <a href="/video-highlights-chien-thang-5-sao-clb-thanh-hoa-truoc-clb-quang-nam-post878225.html">
                                        Highlights chiến thắng '5 sao' CLB Thanh Hóa trước CLB Quảng Nam
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Các học trò của HLV Đức Thắng có chiến thắng tưng bừng 5-0 trước nhà cựu vô địch Quảng Nam tại vòng 23 V.League, qua đó bám đuổi câu lạc bộ đứng thứ hai trên bảng xếp hạng.</p>
                        </article>
                        <article class="" topic-id="2020,3934">
                            <header>
                                <p class="title">
                                    <a href="/dembele-va-cu-lot-xac-ngoan-muc-o-barca-post878164.html">
                                        Dembele và cú lột xác ngoạn mục ở Barca
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Số bàn thắng của Ousmane Dembele từ tháng 8 đã vượt qua thành tích cả mùa trước. Cuối cùng, bản hợp đồng khiến Barca tiêu tốn 145 triệu euro cũng cho thấy giá trị.
                            </p>
                        </article>
                        <article class=" video" >
                            <header>
                                <p class="title">
                                    <a href="/video-hlv-nam-dinh-tu-tin-danh-bai-hagl-sau-khi-cam-hoa-clb-hai-phong-post878217.html">
                                        HLV Nam Định tự tin đánh bại HAGL sau khi cầm hòa CLB Hải Phòng
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Sau 1 điểm quý giá có được trước CLB Hải Phòng, HLV Văn Sỹ cùng CLB Nam Định đang rất tự tin hướng tới trận tiếp đón HAGL trên sân nhà Thiên Trường.</p>
                        </article>
                    </div>
                </section>
                <section id="cong-nghe" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/cong-nghe.html" title="Công nghệ">Công nghệ </a></h2>
                        </hgroup>
                        <p>
                            <a href='/dien-thoai.html'>Điện thoại</a>
                        </p>
                        <p>
                            <a href='/may-tinh-bang.html'>Máy tính bảng</a>
                        </p>
                        <p>
                            <a href='/ung-dung-di-dong.html'>Ứng dụng di động</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="2020,3474,4494">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/10-tinh-nang-an-tuyet-voi-tren-ios-12-post878124.html">
                                    10 tính năng ẩn tuyệt vời trên iOS 12
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:11+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/10-tinh-nang-an-tuyet-voi-tren-ios-12-post878124.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/lce_uxlcq/2018_09_19/ios121_purm.jpg" alt="10 tinh nang an tuyet voi tren iOS 12 hinh anh" title="10 tính năng ẩn tuyệt vời trên iOS 12 hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Cải thiện pin, Siri có thể dịch thuật, AirPods biến thành thiết bị trợ thính là những tính năng mà người dùng không thể bỏ qua trên phiên bản iOS mới.</p>
                        <ul class="relate">
                            <li class=" picture">
                                <a href="/cach-ios-12-giup-camera-iphone-cua-ban-tot-hon-post877998.html">
                                    Cách iOS 12 giúp camera iPhone của bạn tốt hơn</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" picture" topic-id="4024">
                            <header>
                                <p class="title">
                                    <a href="/xiaomi-gioi-thieu-mi-8-pro-chip-snapdragon-845-gia-467-usd-post878196.html">
                                        Xiaomi giới thiệu Mi 8 Pro - chip Snapdragon 845, giá 467 USD
                                    </a>
                                </p>
                                <time datetime="2018-09-19 19:16+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/dau-an-ai-challenge-2018-cua-cong-dong-ai-viet-post878181.html">
                                        Dấu ấn AI Challenge 2018 của cộng đồng AI Việt
                                    </a>
                                </p>
                                <time datetime="2018-09-19 18:24+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/bluestacks-4-ra-mat-chay-app-android-nhanh-hon-smartphone-cao-cap-post878109.html">
                                        BlueStacks 4 ra mắt, chạy app Android nhanh hơn smartphone cao cấp
                                    </a>
                                </p>
                                <time datetime="2018-09-19 13:30+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/galaxy-a7-moi-lo-dien-3-camera-gia-du-kien-407-usd-post877986.html">
                                        Galaxy A7 mới lộ diện - 3 camera, giá dự kiến 407 USD
                                    </a>
                                </p>
                                <time datetime="2018-09-19 07:23+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="4439,3474">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/apple-la-cong-ty-nghin-ty-nhung-nhan-vien-khong-nuoi-noi-gia-dinh-post878099.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/lce_uxlcq/2018_09_19/silicon_valley_rising_launch_otu_img.jpg" alt="Apple la cong ty nghin ty, nhung nhan vien khong nuoi noi gia dinh hinh anh" title="Apple là công ty nghìn tỷ, nhưng nhân viên không nuôi nổi gia đình hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/apple-la-cong-ty-nghin-ty-nhung-nhan-vien-khong-nuoi-noi-gia-dinh-post878099.html">
                                    Apple là công ty nghìn tỷ, nhưng nhân viên không nuôi nổi gia đình
                                </a>
                            </p>
                            <time datetime="2018-09-19 13:33+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="xe-360" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/oto-xe-may.html" title="Xe 360">Xe 360 </a></h2>
                        </hgroup>
                        <p>
                            <a href='/xe-may.html'>Xe máy</a>
                        </p>
                        <p>
                            <a href='/o-to.html'>Ô-tô</a>
                        </p>
                        <p>
                            <a href='/xe-do.html'>Xe độ</a>
                        </p>
                        <p>
                            <a href='/sieu-xe.html'>Siêu xe</a>
                        </p>
                    </header>
                    <article class="featured picture" topic-id="2020,4440">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/day-la-ly-do-nguoi-my-khong-con-ua-chuong-sedan-post878079.html">
                                    Đây là lý do người Mỹ không còn ưa chuộng sedan
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:07+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/day-la-ly-do-nguoi-my-khong-con-ua-chuong-sedan-post878079.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/rik_rdcvcvwt_wc/2018_09_19/461806.jpg" alt="Day la ly do nguoi My khong con ua chuong sedan hinh anh" title="Đây là lý do người Mỹ không còn ưa chuộng sedan hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Thời sedan được ưa chuộng như bán tải và SUV đã qua từ lâu. Người Mỹ giờ đây đang dần bỏ rơi mẫu xe truyền thống này do chi phí khấu hao tăng cao. </p>
                        <ul class="relate">
                            <li class="">
                                <a href="/toyota-ferrari-porsche-kiem-duoc-bao-nhieu-tien-moi-giay-post877708.html">
                                    Toyota, Ferrari, Porsche kiếm được bao nhiêu tiền mỗi giây?</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" picture" topic-id="1712,4440,4439">
                            <header>
                                <p class="title">
                                    <a href="/sieu-xe-bmw-i8-roadster-dau-tien-cap-ben-malaysia-post878156.html">
                                        Siêu xe BMW i8 Roadster đầu tiên cập bến Malaysia
                                    </a>
                                </p>
                                <time datetime="2018-09-19 19:57+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="1712,4440,4439">
                            <header>
                                <p class="title">
                                    <a href="/ra-mat-mercedes-amg-a35-4matic-doi-thu-cua-audi-s3-post878106.html">
                                        Ra mắt Mercedes-AMG A35 4MATIC, đối thủ của Audi S3
                                    </a>
                                </p>
                                <time datetime="2018-09-19 16:34+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="4028,4439,4440">
                            <header>
                                <p class="title">
                                    <a href="/ferrari-ra-mat-dong-sieu-xe-icona-moi-voi-2-phien-ban-dac-biet-post878033.html">
                                        Ferrari ra mắt dòng siêu xe Icona mới với 2 phiên bản đặc biệt
                                    </a>
                                </p>
                                <time datetime="2018-09-19 10:04+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/mitsubishi-bat-mi-thiet-ke-mau-ban-tai-triton-moi-post877848.html">
                                        Mitsubishi bật mí thiết kế mẫu bán tải Triton mới
                                    </a>
                                </p>
                                <time datetime="2018-09-19 07:18+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="4440,153">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/dat-gia-cao-honda-hr-v-tu-lam-kho-minh-truoc-doi-thu-post878052.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/fsmuy/2018_09_18/_DSC7338.jpg" alt="Dat gia cao, Honda HR-V tu lam kho minh truoc doi thu hinh anh" title="Đặt giá cao, Honda HR-V tự làm khó mình trước đối thủ hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/dat-gia-cao-honda-hr-v-tu-lam-kho-minh-truoc-doi-thu-post878052.html">
                                    Đặt giá cao, Honda HR-V tự làm khó mình trước đối thủ
                                </a>
                            </p>
                            <time datetime="2018-09-19 13:39+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="giai-tri" class="category skin2">
                    <header>
                        <hgroup>
                            <h2><a href="/giai-tri.html" title="Giải trí">Giải trí </a></h2>
                            <p>
                                <a href='/sao-viet.html'>
                                    Sao Việt</a>
                            </p>
                            <p>
                                <a href='/sao-chau-a.html'>
                                    Sao Châu Á</a>
                            </p>
                            <p>
                                <a href='/sao-hollywood.html'>
                                    Sao Hollywood</a>
                            </p>
                        </hgroup>
                    </header>
                    <article class="featured " topic-id="2020,3712,3919,4590,4613">
                        <div class="cover">
                            <a href="/co-gai-tang-hoa-cho-ong-trump-hoa-hau-tieu-vy-dep-ngoan-ngay-tho-post878191.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_19/41052058_128986714716286_2781123299915071488_n_thumb.jpg" alt="Co gai tang hoa cho ong Trump: &#39;Hoa hau Tieu Vy dep, ngoan, ngay tho&#39; hinh anh" title="Cô gái tặng hoa cho ông Trump: &#39;Hoa hậu Tiểu Vy đẹp, ngoan, ngây thơ&#39; hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/co-gai-tang-hoa-cho-ong-trump-hoa-hau-tieu-vy-dep-ngoan-ngay-tho-post878191.html">
                                    Cô gái tặng hoa cho ông Trump: 'Hoa hậu Tiểu Vy đẹp, ngoan, ngây thơ'
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:18+0700"></time>
                        </header>
                        <p class="summary">Phạm Ngọc Hà My cho biết Trần Tiểu Vy là một trong những thí sinh cô chơi thân nhất khi tham gia Hoa hậu Việt Nam năm nay. </p>
                    </article>
                    <div class="top">
                        <article class="" topic-id="2001,2020,4520,4521,4522">
                            <div class="cover">
                                <a href="/sau-khi-xuat-vien-mai-phuong-sang-tung-kinh-dem-ho-va-mat-ngu-post878199.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/bpivpjbp/2018_09_19/41934096_10216295273871093_6234ava558923257413632_n.jpg" alt="Sau khi xuat vien, Mai Phuong sang tung kinh, dem ho va mat ngu hinh anh" title="Sau khi xuất viện, Mai Phương sáng tụng kinh, đêm ho và mất ngủ hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/sau-khi-xuat-vien-mai-phuong-sang-tung-kinh-dem-ho-va-mat-ngu-post878199.html">
                                        Sau khi xuất viện, Mai Phương sáng tụng kinh, đêm ho và mất ngủ
                                    </a>
                                </p>
                            </header>
                            <p class="summary">MC Ốc Thanh Vân cho biết hiện Mai Phương sinh hoạt giống một người lớn tuổi, dậy từ 5h sáng và đêm ít ngủ do ho.</p>
                        </article>
                        <article class="" topic-id="4479">
                            <div class="cover">
                                <a href="/truoc-scandal-au-da-bup-be-xinh-dep-goo-hara-qua-nhieu-tai-tieng-post877662.html">
                                    <img src="https://znews-gif-td.zadn.vn/Uploaded/unvjuas/2018_09_17/ezgifcomcrop.gif" alt="Truoc scandal au da, ‘bup be xinh dep&#39; Goo Hara qua nhieu tai tieng hinh anh" title="Trước scandal ẩu đả, ‘búp bê xinh đẹp&#39; Goo Hara quá nhiều tai tiếng hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/truoc-scandal-au-da-bup-be-xinh-dep-goo-hara-qua-nhieu-tai-tieng-post877662.html">
                                        Trước scandal ẩu đả, ‘búp bê xinh đẹp' Goo Hara quá nhiều tai tiếng
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Trước scandal ẩu đả với bạn trai, Goo Hara là nữ ca sĩ thần tượng gắn liền với nhiều thị phi. Cô từng bị công chúng tẩy chay vì vô lễ với tiền bối, chụp ảnh gợi dục...</p>
                        </article>
                        <article class="" topic-id="4596">
                            <header>
                                <p class="title">
                                    <a href="/my-nam-dien-hi-cong-luoc-lo-anh-hen-ho-ban-dien-nu-post878209.html">
                                        Mỹ nam 'Diên Hi công lược' lộ ảnh hẹn hò bạn diễn nữ
                                    </a>
                                </p>
                            </header>
                            <p class="summary">"Phó Hằng" Hứa Khải im lặng sau khi loạt ảnh đi chung cùng Bạch Lộc được đăng tải. Trước đó, bạn gái cũ từng tố tài tử lăng nhăng, qua lại với Bạch Lộc sau lưng cô.</p>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/dien-vien-thanh-thuy-mang-thai-lan-2-sau-9-nam-cho-doi-post878125.html">
                                        Diễn viên Thanh Thúy mang thai lần 2 sau 9 năm chờ đợi
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Bà xã đạo diễn Đức Thịnh cho biết cô đang mang bầu ở tháng thứ 5. Hiện, cô tạm ngưng việc sản xuất phim để ở nhà dưỡng thai. </p>
                        </article>
                        <article class=" picture" topic-id="1603">
                            <header>
                                <p class="title">
                                    <a href="/vo-chong-justin-timberlake-van-man-nong-sau-6-nam-ket-hon-post878119.html">
                                        Vợ chồng Justin Timberlake vẫn mặn nồng sau 6 năm kết hôn
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Sau 6 năm kết hôn, vợ chồng ca sĩ Justin Timberlake và Jessica Biel vẫn không ngần ngại dành cho nhau những nụ hôn ngọt ngào trước ống kính.</p>
                        </article>
                        <article class=" hasvideo" topic-id="1603,3743">
                            <header>
                                <p class="title">
                                    <a href="/justin-bieber-vua-dem-dan-guitar-vua-hat-tren-pho-post878071.html">
                                        Justin Bieber vừa đệm đàn guitar vừa hát trên phố
                                    </a>
                                </p>
                            </header>
                            <p class="summary">Hailey Baldwin nhìn ngắm Justin Bieber với vẻ mặt hạnh phúc khi nam ca sĩ vừa đệm đàn guitar vừa hát trên phố ở London (Anh). </p>
                        </article>
                    </div>
                </section>
                <section id="am-nhac" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/am-nhac.html" title="Âm nhạc">Âm nhạc </a></h2>
                        </hgroup>
                        <p>
                            <a href='/nhac-viet.html'>Nhạc Việt</a>
                        </p>
                        <p>
                            <a href='/nhac-han.html'>Nhạc Hàn</a>
                        </p>
                        <p>
                            <a href='/nhac-au-my.html'>Nhạc Âu Mỹ</a>
                        </p>
                        <!-- Thêm sub menu cho Zone Âm nhạc -->
                        <p><a href="/zing-chart-tieu-diem.html">#ZingChart</a></p>
                    </header>
                    <article class="featured " topic-id="2020,3666">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/tuan-hung-toi-nhieu-hit-nhat-nhung-cay-dang-khong-dung-dau-bxh-post878126.html">
                                    Tuấn Hưng: ‘Tôi nhiều hit nhất nhưng cay đắng không đứng đầu BXH’
                                </a>
                                <span class="comment_count">14</span>
                            </p>
                            <time datetime="2018-09-19 15:04+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/tuan-hung-toi-nhieu-hit-nhat-nhung-cay-dang-khong-dung-dau-bxh-post878126.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/izhqv/2018_09_19/photo15372920836011537292083602308479182.jpg" alt="Tuan Hung: ‘Toi nhieu hit nhat nhung cay dang khong dung dau BXH’ hinh anh" title="Tuấn Hưng: ‘Tôi nhiều hit nhất nhưng cay đắng không đứng đầu BXH’ hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Giọng ca “Nắm lấy tay anh” cho biết anh là ca sĩ có nhiều bản hit nhất, nhưng cay đắng là không có bài nào đứng đầu các bảng xếp hạng âm nhạc.
                        </p>
                        <ul class="relate">
                            <li class="">
                                <a href="/quynh-bup-be-tap-12-canh-khuoc-tu-de-nghi-cung-bo-tron-cua-quynh-post877989.html">
                                    'Quỳnh búp bê' tập 12: Cảnh khước từ đề nghị cùng bỏ trốn của Quỳnh</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" hasvideo" topic-id="21">
                            <header>
                                <p class="title">
                                    <a href="/bo-doi-bit-mat-nhao-lon-tren-khong-khien-khan-gia-hoang-so-post878153.html">
                                        Bộ đôi bịt mắt nhào lộn trên không khiến khán giả hoảng sợ
                                    </a>
                                </p>
                                <time datetime="2018-09-19 18:00+0700"></time>
                            </header>
                        </article>
                        <article class=" advertising" >
                            <header>
                                <p class="title">
                                    <a href="/tran-tien-ke-lang-du-cua-lang-nhac-viet-post878036.html">
                                        Trần Tiến - kẻ lãng du của làng nhạc Việt
                                    </a>
                                </p>
                                <time datetime="2018-09-19 13:00+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="3655">
                            <header>
                                <p class="title">
                                    <a href="/ca-khuc-moi-bi-che-cu-ky-thu-minh-phan-bac-do-la-dung-y-cua-e-kip-post878095.html">
                                        Ca khúc mới bị chê cũ kỹ, Thu Minh phản bác: 'Đó là dụng ý của ê-kíp'
                                    </a>
                                </p>
                                <time datetime="2018-09-19 12:16+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="3905">
                            <header>
                                <p class="title">
                                    <a href="/hoang-tu-indie-vu-muon-tu-tao-dong-nhac-rieng-nhu-trinh-cong-son-post877339.html">
                                        Hoàng tử indie Vũ: 'Muốn tự tạo dòng nhạc riêng, như Trịnh Công Sơn'
                                    </a>
                                </p>
                                <time datetime="2018-09-19 08:46+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " >
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/goo-hara-xin-loi-cau-mong-su-tha-thu-tu-ban-trai-sau-vu-au-da-post878146.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/kbd_pilk/2018_09_19/hara1.jpg" alt="Goo Hara xin loi, cau mong su tha thu tu ban trai sau vu au da hinh anh" title="Goo Hara xin lỗi, cầu mong sự tha thứ từ bạn trai sau vụ ẩu đả hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/goo-hara-xin-loi-cau-mong-su-tha-thu-tu-ban-trai-sau-vu-au-da-post878146.html">
                                    Goo Hara xin lỗi, cầu mong sự tha thứ từ bạn trai sau vụ ẩu đả
                                </a>
                            </p>
                            <time datetime="2018-09-19 15:41+0700"></time>
                        </header>
                    </article>
                </section>
                <iframe scrolling="no" width="640" height="189" src="https://mp3.zing.vn/embed/zing-chart" frameborder="0" allowfullscreen="true" style="width: 100%;height: 288px;"></iframe>
                <section id="phim-anh" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/phim-anh.html" title="Phim ảnh">Phim ảnh </a></h2>
                        </hgroup>
                        <p>
                            <a href='/phim-chieu-rap.html'>Phim chiếu rạp</a>
                        </p>
                        <p>
                            <a href='/phim-truyen-hinh.html'>Phim truyền hình</a>
                        </p>
                        <p>
                            <a href='/game-show.html'>Game Show</a>
                        </p>
                    </header>
                    <article class="featured picture" topic-id="2002,3864">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/loat-chi-tiet-thu-vi-goi-mo-tu-trailer-dau-tien-cua-captain-marvel-post878093.html">
                                    Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel'
                                </a>
                            </p>
                            <time datetime="2018-09-19 14:43+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/loat-chi-tiet-thu-vi-goi-mo-tu-trailer-dau-tien-cua-captain-marvel-post878093.html">
                                <img src="https://znews-gif-td.zadn.vn/Uploaded/xbhunku/2018_09_19/ezgif1270bd25f97.gif" alt="Loat chi tiet thu vi, goi mo tu trailer dau tien cua ‘Captain Marvel&#39; hinh anh" title="Loạt chi tiết thú vị, gợi mở từ trailer đầu tiên của ‘Captain Marvel&#39; hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Rất nhiều điều thú vị và gây tò mò cho khán giả đã xuất hiện trong đoạn phim quảng cáo đầu tiên của “Captain Marvel”.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/captain-marvel-thi-uy-suc-manh-qua-trailer-dau-tien-post877951.html">
                                    Captain Marvel thị uy sức mạnh qua trailer đầu tiên</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" picture" >
                            <header>
                                <p class="title">
                                    <a href="/tai-sao-quai-thu-vo-hinh-that-bai-khi-tai-xuat-post878056.html">
                                        Tại sao ‘Quái thú vô hình’ thất bại khi tái xuất?
                                    </a>
                                </p>
                                <time datetime="2018-09-19 11:35+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="4470">
                            <header>
                                <p class="title">
                                    <a href="/the-bachelor-tap-6-thi-sinh-bi-che-nhao-dat-biet-danh-du-nuoc-mat-post878026.html">
                                        The Bachelor tập 6: Thí sinh bị chế nhạo, đặt biệt danh 'dư nước mắt'
                                    </a>
                                </p>
                                <time datetime="2018-09-19 10:09+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4463,3864">
                            <header>
                                <p class="title">
                                    <a href="/loki-va-mot-so-sieu-anh-hung-marvel-du-kien-co-phim-truyen-hinh-rieng-post878038.html">
                                        Loki và một số siêu anh hùng Marvel dự kiến có phim truyền hình riêng
                                    </a>
                                </p>
                                <time datetime="2018-09-19 10:03+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="4459">
                            <header>
                                <p class="title">
                                    <a href="/gao-nep-gao-te-hon-voi-me-han-bi-ba-tat-doa-duoi-ra-khoi-nha-post878019.html">
                                        'Gạo nếp gạo tẻ': Hỗn với mẹ, Hân bị ba tát, dọa đuổi ra khỏi nhà
                                    </a>
                                </p>
                                <time datetime="2018-09-19 08:25+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside hasvideo" topic-id="4592,4296">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/sao-co-gai-co-hinh-xam-rong-tu-choi-mac-lot-nang-nguc-trong-phan-moi-post878182.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/xbhunku/2018_09_19/004.jpg" alt="Sao ‘Co gai co hinh xam rong’ tu choi mac lot nang nguc trong phan moi hinh anh" title="Sao ‘Cô gái có hình xăm rồng’ từ chối mặc lót nâng ngực trong phần mới hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/sao-co-gai-co-hinh-xam-rong-tu-choi-mac-lot-nang-nguc-trong-phan-moi-post878182.html">
                                    Sao ‘Cô gái có hình xăm rồng’ từ chối mặc lót nâng ngực trong phần mới
                                </a>
                            </p>
                            <time datetime="2018-09-19 18:47+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="thoi-trang" class="category skin3">
                    <header>
                        <hgroup>
                            <h2><a href="/thoi-trang.html" title="Thời trang">Thời trang </a></h2>
                            <p><a href='/thoi-trang-sao.html'>
                                    Thời trang sao</a></p>
                            <p><a href='/mac-dep.html'>
                                    Mặc đẹp</a></p>
                            <p><a href='/lam-dep.html'>
                                    Làm đẹp</a></p>
                        </hgroup>
                    </header>
                    <article class="featured " topic-id="2020,4084">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/pham-bang-bang-bi-hang-loat-thuong-hieu-quoc-te-tay-chay-post878130.html">
                                    Phạm Băng Băng bị hàng loạt thương hiệu quốc tế tẩy chay
                                </a>
                            </p>
                            <time datetime="2018-09-19 14:53+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/pham-bang-bang-bi-hang-loat-thuong-hieu-quoc-te-tay-chay-post878130.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/kbd_pilk/2018_09_19/fanbingbing1024x567.jpg" alt="Pham Bang Bang bi hang loat thuong hieu quoc te tay chay hinh anh" title="Phạm Băng Băng bị hàng loạt thương hiệu quốc tế tẩy chay hình ảnh">
                            </a>
                        </div>
                        <p class="summary">Nghi án trốn thuế và việc biến mất suốt 3 tháng khiến cho minh tinh Phạm Băng Băng bị hàng loạt nhãn hàng hợp tác cùng cô hủy hợp đồng.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/tap-chi-time-dat-van-de-ve-viec-pham-bang-bang-mat-tich-post877828.html">
                                    Tạp chí Time đặt vấn đề về việc Phạm Băng Băng mất tích</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" picture" topic-id="3919,3918,2008">
                            <header>
                                <p class="title">
                                    <a href="/nhung-nguoi-dep-moi-dang-quang-hoa-hau-hoa-binh-tren-the-gioi-post877899.html">
                                        Những người đẹp mới đăng quang Hoa hậu Hòa bình trên thế giới
                                    </a>
                                </p>
                                <time datetime="2018-09-18 19:59+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="692,2008,4446">
                            <header>
                                <p class="title">
                                    <a href="/10-mau-vay-dep-nhat-tham-do-le-trao-giai-primetime-emmy-2018-post877721.html">
                                        10 mẫu váy đẹp nhất thảm đỏ lễ trao giải Primetime Emmy 2018
                                    </a>
                                </p>
                                <time datetime="2018-09-18 14:30+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="4446,4026,3918">
                            <header>
                                <p class="title">
                                    <a href="/sieu-mau-lara-stone-mac-loi-trang-phuc-khi-du-tiec-cua-victoria-post877637.html">
                                        Siêu mẫu Lara Stone mắc lỗi trang phục khi dự tiệc của Victoria
                                    </a>
                                </p>
                                <time datetime="2018-09-18 05:00+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="3921,4446">
                            <header>
                                <p class="title">
                                    <a href="/video-cach-giup-ban-gai-tan-dung-san-pham-trang-diem-gan-het-post877296.html">
                                        Cách giúp bạn gái tận dụng sản phẩm trang điểm gần hết
                                    </a>
                                </p>
                                <time datetime="2018-09-18 05:00+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside picture" topic-id="3918,4085">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/my-nhan-showbiz-han-quoc-noi-bat-o-san-bay-voi-mai-toc-khac-la-post878220.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/unvjuas/2018_09_19/0002728839_001_20180919141236725m.jpg" alt="My nhan showbiz Han Quoc noi bat o san bay voi mai toc khac la hinh anh" title="Mỹ nhân showbiz Hàn Quốc nổi bật ở sân bay với mái tóc khác lạ hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/my-nhan-showbiz-han-quoc-noi-bat-o-san-bay-voi-mai-toc-khac-la-post878220.html">
                                    Mỹ nhân showbiz Hàn Quốc nổi bật ở sân bay với mái tóc khác lạ
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:51+0700"></time>
                        </header>
                    </article>
                    <div class="showcase">
                        <article class=" picture" topic-id="2002,2008,3918">
                            <div class="cover">
                                <a href="/hai-nguoi-mau-viet-trinh-dien-o-london-fashion-week-post878148.html">
                                    <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_19/42058891_1064696103692246_8929183918293254144_n_thumb.jpg" alt="Hai nguoi mau Viet trinh dien o London Fashion Week hinh anh" title="Hai người mẫu Việt trình diễn ở London Fashion Week hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title"><a href="/hai-nguoi-mau-viet-trinh-dien-o-london-fashion-week-post878148.html">
                                        Hai người mẫu Việt trình diễn ở London Fashion Week
                                    </a></p>
                                <time datetime="2018-09-19 15:50+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="3919,3918,2008">
                            <div class="cover">
                                <a href="/nhung-nguoi-dep-moi-dang-quang-hoa-hau-hoa-binh-tren-the-gioi-post877899.html">
                                    <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_18/41946308_1958459587510361_265610729023864832_n_thumb.jpg" alt="Nhung nguoi dep moi dang quang Hoa hau Hoa binh tren the gioi hinh anh" title="Những người đẹp mới đăng quang Hoa hậu Hòa bình trên thế giới hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title"><a href="/nhung-nguoi-dep-moi-dang-quang-hoa-hau-hoa-binh-tren-the-gioi-post877899.html">
                                        Những người đẹp mới đăng quang Hoa hậu Hòa bình trên thế giới
                                    </a></p>
                                <time datetime="2018-09-18 19:59+0700"></time>
                            </header>
                        </article>
                        <article class=" picture" topic-id="692,2008,4446">
                            <div class="cover">
                                <a href="/10-mau-vay-dep-nhat-tham-do-le-trao-giai-primetime-emmy-2018-post877721.html">
                                    <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/neg_yslewlx/2018_09_18/cvcvc_2.jpg" alt="10 mau vay dep nhat tham do le trao giai Primetime Emmy 2018 hinh anh" title="10 mẫu váy đẹp nhất thảm đỏ lễ trao giải Primetime Emmy 2018 hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title"><a href="/10-mau-vay-dep-nhat-tham-do-le-trao-giai-primetime-emmy-2018-post877721.html">
                                        10 mẫu váy đẹp nhất thảm đỏ lễ trao giải Primetime Emmy 2018
                                    </a></p>
                                <time datetime="2018-09-18 14:30+0700"></time>
                            </header>
                        </article>
                    </div>
                </section>
                <section id="song-tre" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/song-tre.html" title="Sống trẻ">Sống trẻ </a></h2>
                        </hgroup>
                        <p>
                            <a href='/guong-mat-tre.html'>Gương mặt trẻ</a>
                        </p>
                        <p>
                            <a href='/cong-dong-mang.html'>Cộng đồng mạng</a>
                        </p>
                        <p>
                            <a href='/su-kien.html'>Sự kiện</a>
                        </p>
                    </header>
                    <article class="featured hasvideo" >
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/nam-de-len-nhau-o-quan-ca-phe-dung-danh-dong-la-song-thoang-nhu-tay-post878193.html">
                                    'Nằm đè lên nhau ở quán cà phê': Đừng đánh đồng là sống thoáng như Tây
                                </a>
                            </p>
                            <time datetime="2018-09-19 20:29+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/nam-de-len-nhau-o-quan-ca-phe-dung-danh-dong-la-song-thoang-nhu-tay-post878193.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/neg_rtlzofn/2018_09_19/trs_thumb.jpg" alt="&#39;Nam de len nhau o quan ca phe&#39;: Dung danh dong la song thoang nhu Tay hinh anh" title="&#39;Nằm đè lên nhau ở quán cà phê&#39;: Đừng đánh đồng là sống thoáng như Tây hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Trước cảnh thân mật quá mức chốn công cộng của một số bạn trẻ, phần lớn dân mạng cho rằng đó là hành động phản cảm, không tôn trọng những người xung quanh.</p>
                        <ul class="relate">
                            <li class=" stream hasvideo">
                                <a href="/nguoi-choi-ai-la-trieu-phu-danh-22-trieu-tien-thuong-lam-tu-thien-post877984.html">
                                    Người chơi 'Ai là triệu phú' dành 22 triệu tiền thưởng làm từ thiện</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" hasvideo" topic-id="4498,4497,4216,4151">
                            <header>
                                <p class="title">
                                    <a href="/bo-truong-gd-dt-tang-bang-khen-cho-quan-quan-olympia-hoang-cuong-post877992.html">
                                        Bộ trưởng GD&ĐT tặng bằng khen cho quán quân Olympia Hoàng Cường
                                    </a>
                                </p>
                                <time datetime="2018-09-19 16:19+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/nhom-nu-sinh-thai-nguyen-bien-ky-tuc-xa-thanh-studio-song-ao-post878078.html">
                                        Nhóm nữ sinh Thái Nguyên biến ký túc xá thành studio 'sống ảo'
                                    </a>
                                </p>
                                <time datetime="2018-09-19 14:52+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="2020,4445">
                            <header>
                                <p class="title">
                                    <a href="/doi-trai-gai-than-nhien-nam-de-len-nhau-tai-quan-ca-phe-o-ha-noi-post877398.html">
                                        Đôi trai gái thản nhiên 'nằm đè lên nhau' tại quán cà phê ở Hà Nội
                                    </a>
                                    <span class="comment_count">11</span>
                                </p>
                                <time datetime="2018-09-19 11:15+0700"></time>
                            </header>
                        </article>
                        <article class=" picture hasvideo" >
                            <header>
                                <p class="title">
                                    <a href="/hot-boy-bong-ro-19-tuoi-cao-1-99-m-don-tim-cac-chi-em-post877921.html">
                                        Hot boy bóng rổ 19 tuổi, cao 1,99 m 'đốn tim' các chị em
                                    </a>
                                </p>
                                <time datetime="2018-09-19 09:36+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside hasvideo" topic-id="3919,4590,4613">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/ai-co-suc-hut-nhat-tren-mang-trong-top-3-hoa-hau-viet-nam-2018-post877498.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/mdf_drkydd/2018_09_17/42058963_455078578317034_1583936294692585472_n_thumb.jpg" alt="Ai co suc hut nhat tren mang trong top 3 &#39;Hoa hau Viet Nam 2018&#39;? hinh anh" title="Ai có sức hút nhất trên mạng trong top 3 &#39;Hoa hậu Việt Nam 2018&#39;? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/ai-co-suc-hut-nhat-tren-mang-trong-top-3-hoa-hau-viet-nam-2018-post877498.html">
                                    Ai có sức hút nhất trên mạng trong top 3 'Hoa hậu Việt Nam 2018'?
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:45+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="giao-duc" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/giao-duc.html" title="Giáo dục">Giáo dục </a></h2>
                        </hgroup>
                        <p>
                            <a href='/tuyen-sinh-dai-hoc-2018.html'>Tuyển sinh 2018</a>
                        </p>
                        <p>
                            <a href='/tu-van-giao-duc.html'>Tư vấn</a>
                        </p>
                        <p>
                            <a href='/du-hoc.html'> Du học</a>
                        </p>
                        <!-- Thêm sub menu cho Zone Giáo dục -->
                        <p><a href="/hoc-tieng-anh-tieu-diem.html">Học Tiếng Anh</a></p>
                    </header>
                    <article class="featured " topic-id="2020,3535">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/danh-tuong-nao-mai-guom-duoi-bong-trang-danh-duoi-giac-minh-post877789.html">
                                    Danh tướng nào mài gươm dưới bóng trăng đánh đuổi giặc Minh?
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:56+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/danh-tuong-nao-mai-guom-duoi-bong-trang-danh-duoi-giac-minh-post877789.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_nsozxd/2018_09_18/c2.jpg" alt="Danh tuong nao mai guom duoi bong trang danh duoi giac Minh? hinh anh" title="Danh tướng nào mài gươm dưới bóng trăng đánh đuổi giặc Minh? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Ông là danh tướng tham gia đánh đuổi giặc ngoại xâm, gắn với giai thoại “gươm mài bóng nguyệt” đi vào thi ca.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/ai-la-nguoi-viet-dau-tien-ban-lenh-cam-hut-thuoc-la-post876662.html">
                                    Ai là người Việt đầu tiên ban lệnh cấm hút thuốc lá?</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class="" topic-id="4603">
                            <header>
                                <p class="title">
                                    <a href="/dai-bieu-quoc-hoi-mang-sach-toan-lop-1-den-phien-hop-thuong-vu-post878158.html">
                                        Đại biểu Quốc hội mang sách Toán lớp 1 đến phiên họp Thường vụ
                                    </a>
                                </p>
                                <time datetime="2018-09-19 17:53+0700"></time>
                            </header>
                        </article>
                        <article class=" hasvideo" topic-id="4498,4497,4216,4151">
                            <header>
                                <p class="title">
                                    <a href="/bo-truong-gd-dt-tang-bang-khen-cho-quan-quan-olympia-hoang-cuong-post877992.html">
                                        Bộ trưởng GD&ĐT tặng bằng khen cho quán quân Olympia Hoàng Cường
                                    </a>
                                </p>
                                <time datetime="2018-09-19 16:19+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/dang-thong-tin-hop-phu-huynh-len-facebook-bi-cong-an-moi-lam-viec-post877307.html">
                                        Đăng thông tin họp phụ huynh lên Facebook, bị công an mời làm việc
                                    </a>
                                    <span class="comment_count">21</span>
                                </p>
                                <time datetime="2018-09-19 11:20+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4498">
                            <header>
                                <p class="title">
                                    <a href="/ban-dai-dien-cha-me-hs-khong-duoc-quy-dinh-muc-thu-quy-post877924.html">
                                        Ban đại diện cha mẹ HS không được quy định mức thu quỹ
                                    </a>
                                </p>
                                <time datetime="2018-09-18 20:01+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside hasvideo" >
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/hieu-truong-bi-to-lam-thu-gian-doi-sao-day-duoc-hoc-tro-post877983.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/zbvunua/2018_09_18/hieu_truong_thumb.jpg" alt="&#39;Hieu truong bi to lam thu gian doi, sao day duoc hoc tro?&#39; hinh anh" title="&#39;Hiệu trưởng bị tố lạm thu gian dối, sao dạy được học trò?&#39; hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/hieu-truong-bi-to-lam-thu-gian-doi-sao-day-duoc-hoc-tro-post877983.html">
                                    'Hiệu trưởng bị tố lạm thu gian dối, sao dạy được học trò?'
                                </a>
                                <span class="comment_count">5</span>
                            </p>
                            <time datetime="2018-09-19 06:30+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="suc-khoe" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/suc-khoe.html" title="Sức khỏe">Sức khỏe </a></h2>
                        </hgroup>
                        <p>
                            <a href='/khoe-dep.html'>Khỏe đẹp</a>
                        </p>
                        <p>
                            <a href='/dinh-duong.html'>Dinh dưỡng</a>
                        </p>
                        <p>
                            <a href='/me-va-be.html'>Mẹ và Bé</a>
                        </p>
                        <p>
                            <a href='/benh-thuong-gap.html'>Bệnh thường gặp</a>
                        </p>
                    </header>
                    <article class="featured " topic-id="4150,4592">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/ma-tuy-tim-thay-trong-dai-nhac-hoi-o-ho-tay-nguy-hiem-the-nao-post878101.html">
                                    Ma túy tìm thấy trong đại nhạc hội ở hồ Tây nguy hiểm thế nào?
                                </a>
                            </p>
                            <time datetime="2018-09-19 15:02+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/ma-tuy-tim-thay-trong-dai-nhac-hoi-o-ho-tay-nguy-hiem-the-nao-post878101.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/lepx/2018_09_19/matuyketaminegayaogiacmachauvietcuongsudungnguyhiemthenaoHinh6.jpg" alt="Ma tuy tim thay trong dai nhac hoi o ho Tay nguy hiem the nao? hinh anh" title="Ma túy tìm thấy trong đại nhạc hội ở hồ Tây nguy hiểm thế nào? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Với kết quả bước đầu xét nghiệm, cơ quan chức năng phát hiện chất ketamine trong một số tang vật thu giữ tại hiện trường vụ 7 người chết khi tham gia đại nhạc hội ở hồ Tây.</p>
                        <ul class="relate">
                            <li class="">
                                <a href="/nhung-nguy-co-khien-nguoi-soc-ma-tuy-nhanh-chet-hon-post877660.html">
                                    Những nguy cơ khiến người sốc ma túy nhanh chết hơn</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" video" topic-id="4445">
                            <header>
                                <p class="title">
                                    <a href="/video-tu-che-do-uong-thanh-loc-tang-cuong-suc-khoe-post878161.html">
                                        Tự chế đồ uống thanh lọc tăng cường sức khỏe
                                    </a>
                                </p>
                                <time datetime="2018-09-19 18:52+0700"></time>
                            </header>
                        </article>
                        <article class=" advertising" >
                            <header>
                                <p class="title">
                                    <a href="/nhung-thoi-quen-khien-da-ban-khoc-thet-post878098.html">
                                        Những thói quen khiến da bạn ‘khóc thét’
                                    </a>
                                </p>
                                <time datetime="2018-09-19 15:00+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/ruoc-benh-vi-thoi-quen-tia-long-mui-lay-ray-tai-ngoai-hang-post876668.html">
                                        Rước bệnh vì thói quen tỉa lông mũi, lấy ráy tai ngoài hàng
                                    </a>
                                </p>
                                <time datetime="2018-09-19 13:28+0700"></time>
                            </header>
                        </article>
                        <article class="" >
                            <header>
                                <p class="title">
                                    <a href="/thuc-pham-bien-doi-gen-co-an-toan-voi-suc-khoe-post878069.html">
                                        Thực phẩm biến đổi gen có an toàn với sức khỏe?
                                    </a>
                                </p>
                                <time datetime="2018-09-19 11:23+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside " topic-id="3535">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/bi-quyet-an-banh-trung-thu-khong-lo-tang-can-post877602.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/gtnvzv/2018_09_17/chinesemidautumnfestivalvocabularyphrases2_thumb.jpg" alt="Bi quyet an banh trung thu khong lo tang can hinh anh" title="Bí quyết ăn bánh trung thu không lo tăng cân hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/bi-quyet-an-banh-trung-thu-khong-lo-tang-can-post877602.html">
                                    Bí quyết ăn bánh trung thu không lo tăng cân
                                </a>
                            </p>
                            <time datetime="2018-09-19 07:58+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="du-lich" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/du-lich.html" title="Du lịch">Du lịch </a></h2>
                        </hgroup>
                        <p>
                            <a href='/dia-diem-du-lich.html'>Địa điểm du lịch</a>
                        </p>
                        <p>
                            <a href='/kinh-nghiem-du-lich.html'>Kinh nghiệm du lịch</a>
                        </p>
                        <p>
                            <a href='/phuot.html'>Phượt</a>
                        </p>
                    </header>
                    <article class="featured picture noads" topic-id="2002,4465">
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/nhat-ban-khac-la-hoang-tan-duoi-ong-kinh-nhiep-anh-gia-phap-post877659.html">
                                    Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp
                                </a>
                            </p>
                            <time datetime="2018-09-19 19:48+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/nhat-ban-khac-la-hoang-tan-duoi-ong-kinh-nhiep-anh-gia-phap-post877659.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_eioxrd/2018_09_17/2.jpg" alt="Nhat Ban khac la, hoang tan duoi ong kinh nhiep anh gia Phap hinh anh" title="Nhật Bản khác lạ, hoang tàn dưới ống kính nhiếp ảnh gia Pháp hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Hình ảnh những khách sạn, công viên giải trí hay câu lạc bộ thoát y bị bỏ hoang phản ánh một khía cạnh khác của Nhật Bản - đất nước công nghệ cao, sạch sẽ nhất thế giới.</p>
                        <ul class="relate">
                            <li class=" video">
                                <a href="/video-dam-cuoi-doc-nhat-to-chuc-tren-luoi-khong-lo-cang-giua-vuc-sau-post877224.html">
                                    Đám cưới độc nhất tổ chức trên lưới khổng lồ căng giữa vực sâu</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" hasvideo" topic-id="4465">
                            <header>
                                <p class="title">
                                    <a href="/xa-rac-o-can-ho-thue-trong-ky-nghi-khach-trung-quoc-gay-bat-binh-post877831.html">
                                        Xả rác ở căn hộ thuê trong kỳ nghỉ, khách Trung Quốc gây bất bình
                                    </a>
                                </p>
                                <time datetime="2018-09-19 16:14+0700"></time>
                            </header>
                        </article>
                        <article class="" topic-id="4467">
                            <header>
                                <p class="title">
                                    <a href="/chi-phi-khoang-500000-dong-o-dau-de-de-ngam-canh-dep-sa-pa-post878094.html">
                                        Chi phí khoảng 500.000 đồng, ở đâu để dễ ngắm cảnh đẹp Sa Pa?
                                    </a>
                                </p>
                                <time datetime="2018-09-19 14:45+0700"></time>
                            </header>
                        </article>
                        <article class=" noads" topic-id="4465,3818">
                            <header>
                                <p class="title">
                                    <a href="/goi-y-cac-buoc-chuan-bi-truoc-chuyen-phuot-dai-loan-post871518.html">
                                        Gợi ý các bước chuẩn bị trước chuyến phượt Đài Loan
                                    </a>
                                </p>
                                <time datetime="2018-09-19 09:47+0700"></time>
                            </header>
                        </article>
                        <article class=" picture noads" topic-id="4467">
                            <header>
                                <p class="title">
                                    <a href="/ngan-ngo-truoc-ve-dep-sa-pa-mua-lua-chin-post877448.html">
                                        Ngẩn ngơ trước vẻ đẹp Sa Pa mùa lúa chín
                                    </a>
                                </p>
                                <time datetime="2018-09-19 07:49+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside picture noads" topic-id="4465">
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/chiem-nguong-xu-so-hoa-kim-cham-dep-nhu-tranh-ve-o-dai-loan-post876721.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/mdf_eioxrd/2018_09_13/weilei_.jpg" alt="Chiem nguong xu so hoa kim cham dep nhu tranh ve o Dai Loan hinh anh" title="Chiêm ngưỡng xứ sở hoa kim châm đẹp như tranh vẽ ở Đài Loan hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/chiem-nguong-xu-so-hoa-kim-cham-dep-nhu-tranh-ve-o-dai-loan-post876721.html">
                                    Chiêm ngưỡng xứ sở hoa kim châm đẹp như tranh vẽ ở Đài Loan
                                </a>
                            </p>
                            <time datetime="2018-09-19 10:36+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="am-thuc" class="category skin1">
                    <header>
                        <hgroup>
                            <h2><a href="/am-thuc.html" title="Ẩm thực">Ẩm thực </a></h2>
                        </hgroup>
                        <p>
                            <a href='/dia-diem-an-uong.html'>Địa điểm ăn uống</a>
                        </p>
                        <p>
                            <a href='/mon-ngon.html'>Món ngon</a>
                        </p>
                    </header>
                    <article class="featured video" >
                        <p class="type"></p>
                        <header>
                            <p class="title">
                                <a href="/video-piranha-nuong-mon-an-dang-so-cua-tho-dan-amazon-post877864.html">
                                    Piranha nướng - món ăn đáng sợ của thổ dân Amazon
                                </a>
                            </p>
                            <time datetime="2018-09-19 20:01+0700"></time>
                        </header>
                        <div class="cover">
                            <a href="/video-piranha-nuong-mon-an-dang-so-cua-tho-dan-amazon-post877864.html">
                                <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/tmuitg/2018_09_18/Tastemade_Travel__Cooking_a_Piranha_in_the_Amazon__Facebookmp4Still004.jpg" alt="Piranha nuong - mon an dang so cua tho dan Amazon hinh anh" title="Piranha nướng - món ăn đáng sợ của thổ dân Amazon hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <p class="summary">Cá hổ piranha là loài cá ăn thịt rất nguy hiểm, kể cả với con người. Bạn đã bao giờ ao ước trải nghiệm vào rừng bắt cá piranha làm món ăn như người bản địa Amazon?</p>
                        <ul class="relate">
                            <li class=" video">
                                <a href="/video-vi-sao-mcdonald-s-burger-king-it-hut-khach-viet-post877613.html">
                                    Vì sao McDonald's, Burger King ít hút khách Việt?</a></li>
                        </ul>
                    </article>
                    <div class="top">
                        <article class=" advertising" >
                            <header>
                                <p class="title">
                                    <a href="/goi-y-5-loai-banh-trung-thu-cho-ngay-ram-thang-8-post878089.html">
                                        Gợi ý 5 loại bánh trung thu cho ngày rằm tháng 8
                                    </a>
                                </p>
                                <time datetime="2018-09-19 12:00+0700"></time>
                            </header>
                        </article>
                        <article class=" picture noads" topic-id="4445">
                            <header>
                                <p class="title">
                                    <a href="/nhung-mon-an-vat-mot-thoi-goi-ky-uc-tuoi-tho-cua-nguoi-ha-noi-post877866.html">
                                        Những món ăn vặt một thời, gợi ký ức tuổi thơ của người Hà Nội
                                    </a>
                                </p>
                                <time datetime="2018-09-19 11:48+0700"></time>
                            </header>
                        </article>
                        <article class=" picture noads" >
                            <header>
                                <p class="title">
                                    <a href="/tu-lam-banh-deo-hoa-dau-biec-vua-dep-vua-ngon-post877499.html">
                                        Tự làm bánh dẻo hoa đậu biếc vừa đẹp vừa ngon
                                    </a>
                                </p>
                                <time datetime="2018-09-18 16:28+0700"></time>
                            </header>
                        </article>
                        <article class=" video" topic-id="3846">
                            <header>
                                <p class="title">
                                    <a href="/video-vi-sao-mcdonald-s-burger-king-it-hut-khach-viet-post877613.html">
                                        Vì sao McDonald's, Burger King ít hút khách Việt?
                                    </a>
                                </p>
                                <time datetime="2018-09-18 11:43+0700"></time>
                            </header>
                        </article>
                    </div>
                    <article class="aside video" >
                        <p class="type"></p>
                        <div class="cover">
                            <a href="/video-robot-biet-lam-banh-mi-burger-o-my-co-gi-dac-biet-post877889.html">
                                <img src="https://znews-photo-td.zadn.vn/w120/Uploaded/pgi_cuhpguvau/2018_09_18/burger1.jpg" alt="Robot biet lam banh mi burger o My co gi dac biet? hinh anh" title="Robot biết làm bánh mì burger ở Mỹ có gì đặc biệt? hình ảnh">
                            </a>
                            &nbsp;
                        </div>
                        <header>
                            <p class="title">
                                <a href="/video-robot-biet-lam-banh-mi-burger-o-my-co-gi-dac-biet-post877889.html">
                                    Robot biết làm bánh mì burger ở Mỹ có gì đặc biệt?
                                </a>
                            </p>
                            <time datetime="2018-09-19 14:43+0700"></time>
                        </header>
                    </article>
                </section>
                <section id="nhip-song" class="category skin4">
                    <header>
                        <hgroup>
                            <h2><a href="/nhip-song.html" title="Nhịp sống">Nhịp sống </a></h2>
                        </hgroup>
                    </header>
                    <section id="nhip-song" class="category">
                        <header>
                            <h2><a href="/TTDN.html" title="Thông tin doanh nghiệp">Thông tin doanh nghiệp </a></h2>
                        </header>
                        <article class="featured" >
                            <div class="cover">
                                <a href="/vbi-duoc-cap-chung-nhan-he-thong-quan-ly-an-toan-thong-tin-post878187.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/wyhktpu/2018_09_19/img20180417102616452ffa95.jpg" alt="VBI duoc cap chung nhan he thong quan ly an toan thong tin hinh anh" title="VBI được cấp chứng nhận hệ thống quản lý an toàn thông tin hình ảnh">
                                </a>
                                &nbsp;</div>
                            <header>
                                <p class="title">
                                    <a href="/vbi-duoc-cap-chung-nhan-he-thong-quan-ly-an-toan-thong-tin-post878187.html">
                                        VBI được cấp chứng nhận hệ thống quản lý an toàn thông tin
                                    </a>
                                </p>
                                <time datetime="2018-09-19 18:00+0700"></time>
                            </header>
                            <p class="summary">Tổng công ty Bảo hiểm VietinBank (VBI) được cấp giấy chứng nhận hệ thống quản lý an toàn thông tin (ATTT) theo tiêu chuẩn ISO/IEC 27001:2013.</p>
                        </article>
                        <div class="top">
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/thuong-hieu-chanel-chau-du-hoi-nghi-ket-noi-doanh-nghiep-viet-han-post878190.html">
                                            Thương hiệu Chanel Châu dự hội nghị kết nối doanh nghiệp Việt - Hàn
                                        </a>
                                    </p>
                                    <time datetime="2018-09-19 19:00+0700"></time>
                                </header>
                            </article>
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/phat-dong-cuoc-thi-miss-hanayuki-post878083.html">
                                            Phát động cuộc thi Miss Hanayuki
                                        </a>
                                    </p>
                                    <time datetime="2018-09-19 14:00+0700"></time>
                                </header>
                            </article>
                        </div>
                    </section>
                    <section id="nhip-song" class="category">
                        <header>
                            <h2><a href="/nhip-song/cuoi.html" title="Cười">Cười </a></h2>
                        </header>
                        <article class="featured" topic-id="4147">
                            <div class="cover">
                                <a href="/muon-kieu-khoc-cuoi-sau-chien-thang-cua-u23-viet-nam-post814671.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/mdf_drywxd/2018_01_25/9043605018_1516756769.jpg" alt="Muon kieu khoc, cuoi sau chien thang cua U23 Viet Nam hinh anh" title="Muôn kiểu khóc, cười sau chiến thắng của U23 Việt Nam hình ảnh">
                                </a>
                                &nbsp;</div>
                            <header>
                                <p class="title">
                                    <a href="/muon-kieu-khoc-cuoi-sau-chien-thang-cua-u23-viet-nam-post814671.html">
                                        Muôn kiểu khóc, cười sau chiến thắng của U23 Việt Nam
                                    </a>
                                    <span class="comment_count">59</span></p>
                                <time datetime="2018-01-26 00:05+0700"></time>
                            </header>
                            <p class="summary">15h ngày 27/1, U23 Việt Nam bước vào trận chung kết với U23 Uzbekistan. Cùng xem lại khoảnh khắc vui sướng không thể kìm nén được cảm xúc của các CĐV.</p>
                        </article>
                        <div class="top">
                            <article topic-id="4147">
                                <header>
                                    <p class="title">
                                        <a href="/muon-kieu-khoc-cuoi-sau-chien-thang-cua-u23-viet-nam-post814671.html">
                                            Muôn kiểu khóc, cười sau chiến thắng của U23 Việt Nam
                                        </a>
                                        <span class="comment_count">59</span></p>
                                    <time datetime="2018-01-26 00:05+0700"></time>
                                </header>
                            </article>
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/bao-hiem-cho-nguoi-hua-nhieu-post767782.html">
                                            Bảo hiểm cho người hứa nhiều
                                        </a>
                                        <span class="comment_count">5</span></p>
                                    <time datetime="2017-08-02 00:09+0700"></time>
                                </header>
                            </article>
                        </div>
                    </section>
                    <section id="sach-hay" class="category">
                        <header>
                            <h2><a href="/sach-hay.html" title="Sách hay">Sách 360 </a></h2>
                        </header>
                        <article class="featured" >
                            <div class="cover">
                                <a href="/xom-bo-giau-va-nhung-cau-chuyen-day-nhiem-mau-ve-lang-que-post877847.html">
                                    <img src="https://znews-photo-td.zadn.vn/w210/Uploaded/ofh_cgkztmzt/2018_09_18/langque.jpg" alt="‘Xom Bo Giau’ va nhung cau chuyen day nhiem mau ve lang que hinh anh" title="‘Xóm Bờ Giậu’ và những câu chuyện đầy nhiệm màu về làng quê hình ảnh">
                                </a>
                            </div>
                            <header>
                                <p class="title">
                                    <a href="/xom-bo-giau-va-nhung-cau-chuyen-day-nhiem-mau-ve-lang-que-post877847.html">
                                        ‘Xóm Bờ Giậu’ và những câu chuyện đầy nhiệm màu về làng quê
                                    </a>
                                </p>
                                <time datetime="2018-09-19 11:26+0700"></time>
                            </header>
                            <p class="summary">Không gian thanh bình nơi làng quê bỗng chốc hóa thành xứ sở thần tiên dưới ngòi bút nhà văn xứ Bắc. Có những điều giản dị mà đẹp đẽ vô ngần được giữ gìn qua những câu chuyện nhỏ.</p>
                        </article>
                        <div class="top">
                            <article >
                                <header>
                                    <p class="title">
                                        <a href="/thanh-hoi-hoa-raphael-khi-chat-cua-mot-vi-hoang-tu-post877291.html">
                                            Thánh hội họa Raphael - khí chất của một vị hoàng tử
                                        </a>
                                    </p>
                                    <time datetime="2018-09-17 06:31+0700"></time>
                                </header>
                            </article>
                            <article topic-id="4592">
                                <header>
                                    <p class="title">
                                        <a href="/lam-the-nao-de-day-thi-thanh-cong-post877188.html">
                                            Làm thế nào để ‘dậy thì thành công’?
                                        </a>
                                    </p>
                                    <time datetime="2018-09-16 07:57+0700"></time>
                                </header>
                            </article>
                        </div>
                    </section>
                </section>
            </div>
        </div>
        <section class="sidebar">
            <section class="pictures">
                <header>
                    <h2><a href="/pictures/">Tin ảnh</a></h2>
                </header>
                <div class="slidebox">
                    <article class="current" topic-id="2003,3405">
                        <div class="cover">
                            <a href="/nghe-si-tien-dua-ong-trum-phim-hai-tet-ve-noi-an-nghi-cuoi-cung-post877829.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_18/7dc5f43c4c54ac0af545.jpg" alt="Nghe si tien dua &#39;ong trum&#39; phim hai Tet ve noi an nghi cuoi cung hinh anh" title="Nghệ sĩ tiễn đưa &#39;ông trùm&#39; phim hài Tết về nơi an nghỉ cuối cùng hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/nghe-si-tien-dua-ong-trum-phim-hai-tet-ve-noi-an-nghi-cuoi-cung-post877829.html">Nghệ sĩ tiễn đưa 'ông trùm' phim hài Tết về nơi an nghỉ cuối cùng </a>
                                <span class="social hot">HOT</span>
                                <span class="comment_count">24</span>
                            </p>
                            <time datetime="2018-09-18 15:12+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,3918,3919,4590,4613">
                        <div class="cover">
                            <a href="/4-nguoi-dep-dang-quang-hoa-hau-viet-nam-o-tuoi-18-post877442.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/bpivpjbp/2018_09_17/avavy.jpg" alt="4 nguoi dep dang quang Hoa hau Viet Nam o tuoi 18 hinh anh" title="4 người đẹp đăng quang Hoa hậu Việt Nam ở tuổi 18 hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/4-nguoi-dep-dang-quang-hoa-hau-viet-nam-o-tuoi-18-post877442.html">4 người đẹp đăng quang Hoa hậu Việt Nam ở tuổi 18 </a>
                                <span class="comment_count">31</span>
                            </p>
                            <time datetime="2018-09-18 05:17+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,3919">
                        <div class="cover">
                            <a href="/ban-trai-tin-don-cua-a-hau-phuong-nga-cao-1-82-m-nguoi-chuan-6-mui-post877576.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/pirr/2018_09_17/5_2_thumb.jpg" alt="Ban trai tin don cua A hau Phuong Nga cao 1,82 m, nguoi chuan 6 mui hinh anh" title="Bạn trai tin đồn của Á hậu Phương Nga cao 1,82 m, người chuẩn 6 múi hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/ban-trai-tin-don-cua-a-hau-phuong-nga-cao-1-82-m-nguoi-chuan-6-mui-post877576.html">Bạn trai tin đồn của Á hậu Phương Nga cao 1,82 m, người chuẩn 6 múi </a>
                                <span class="comment_count">19</span>
                            </p>
                            <time datetime="2018-09-18 08:44+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003">
                        <div class="cover">
                            <a href="/yamaha-exciter-2018-co-them-mau-tem-moi-gia-48-trieu-dong-post877843.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/fsmuy/2018_09_18/DSC_8741.jpg" alt="Yamaha Exciter 2018 co them mau tem moi, gia 48 trieu dong hinh anh" title="Yamaha Exciter 2018 có thêm màu tem mới, giá 48 triệu đồng hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/yamaha-exciter-2018-co-them-mau-tem-moi-gia-48-trieu-dong-post877843.html">Yamaha Exciter 2018 có thêm màu tem mới, giá 48 triệu đồng </a>
                                <span class="comment_count">13</span>
                            </p>
                            <time datetime="2018-09-18 17:37+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,3919,4157,4446">
                        <div class="cover">
                            <a href="/loat-anh-che-u23-viet-nam-ai-se-dang-quang-neu-thi-hoa-hau-post877810.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/ofh_pgazsaff/2018_09_18/41976578_595239457562079_7512733777433460736_n_thumb.jpg" alt="Loat anh che U23 Viet Nam - ai se dang quang neu thi hoa hau? hinh anh" title="Loạt ảnh chế U23 Việt Nam - ai sẽ đăng quang nếu thi hoa hậu? hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/loat-anh-che-u23-viet-nam-ai-se-dang-quang-neu-thi-hoa-hau-post877810.html">Loạt ảnh chế U23 Việt Nam - ai sẽ đăng quang nếu thi hoa hậu? </a>
                                <span class="comment_count">14</span>
                            </p>
                            <time datetime="2018-09-18 14:37+0700"></time>
                        </header>
                    </article>
                    <article topic-id="2003,2008,3919,4283,4590,4613">
                        <div class="cover">
                            <a href="/hoa-hau-viet-nam-tieu-vy-diu-dang-trong-bo-anh-ao-dai-o-hoi-an-post877756.html">
                                <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_18/IMG_1681_thumb.jpg" alt="Hoa hau Viet Nam Tieu Vy diu dang trong bo anh ao dai o Hoi An hinh anh" title="Hoa hậu Việt Nam Tiểu Vy dịu dàng trong bộ ảnh áo dài ở Hội An hình ảnh">
                            </a>
                        </div>
                        <header>
                            <p class="title">
                                <a href="/hoa-hau-viet-nam-tieu-vy-diu-dang-trong-bo-anh-ao-dai-o-hoi-an-post877756.html">Hoa hậu Việt Nam Tiểu Vy dịu dàng trong bộ ảnh áo dài ở Hội An </a>
                                <span class="comment_count">25</span>
                            </p>
                            <time datetime="2018-09-18 11:34+0700"></time>
                        </header>
                    </article>
                </div>
                <p class="controller">
                    <a href="#rewind" class="rewind" style="display: none;">Bài trước</a>
                    <a href="#forward" class="forward" style="display: none;">Bài sau</a>
                </p>
            </section>
            <!-- Start Box Sidebar -->
            <section class="video">
                <header>
                    <h2><a href="/video/">Video</a></h2>
                </header>
                <article class="featured video" topic-id="2121,2208,3618,4150,4592,4614">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-dem-nhac-hoi-co-7-thanh-nien-tu-vong-da-dien-ra-the-nao-post877802.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/tngtbn/2018_09_18/thum23.jpg" alt="Dem nhac hoi co 7 thanh nien tu vong da dien ra the nao? hinh anh" title="Đêm nhạc hội có 7 thanh niên tử vong đã diễn ra thế nào? hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-dem-nhac-hoi-co-7-thanh-nien-tu-vong-da-dien-ra-the-nao-post877802.html">
                                Đêm nhạc hội có 7 thanh niên tử vong đã diễn ra thế nào?
                            </a></p>
                        <time datetime="2018-09-19 06:30+0700"></time>
                    </header>
                </article>
                <article class=" video" topic-id="2121,3919,4442">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-a-hau-bui-phuong-nga-nhay-dep-noi-tieng-anh-troi-chay-post877970.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/mdf_drkydd/2018_09_18/40058928_2083816211946613_5484979627073994752_o_thumb.jpg" alt="A hau Bui Phuong Nga nhay dep, noi tieng Anh troi chay hinh anh" title="Á hậu Bùi Phương Nga nhảy đẹp, nói tiếng Anh trôi chảy hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-a-hau-bui-phuong-nga-nhay-dep-noi-tieng-anh-troi-chay-post877970.html">
                                Á hậu Bùi Phương Nga nhảy đẹp, nói tiếng Anh trôi chảy
                            </a></p>
                        <time datetime="2018-09-19 06:38+0700"></time>
                    </header>
                </article>
                <article class=" video" topic-id="2121,3927,3949">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-highlights-liverpool-3-2-psg-nguoi-hung-o-phut-bu-gio-post878009.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/mdf_zremxw/2018_09_19/02z_thumb_3x2.jpg" alt="Highlights Liverpool 3-2 PSG: Nguoi hung o phut bu gio hinh anh" title="Highlights Liverpool 3-2 PSG: Người hùng ở phút bù giờ hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-highlights-liverpool-3-2-psg-nguoi-hung-o-phut-bu-gio-post878009.html">
                                Highlights Liverpool 3-2 PSG: Người hùng ở phút bù giờ
                            </a></p>
                        <time datetime="2018-09-19 05:50+0700"></time>
                    </header>
                </article>
                <article class=" video" topic-id="2121,3851,3934">
                    <p class="type"> video</p>
                    <div class="cover">
                        <a href="/video-highlights-barca-4-0-psv-messi-sut-phat-dep-mat-post878004.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/mdf_zremxw/2018_09_19/01z_thumb_3x2.jpg" alt="Highlights Barca 4-0 PSV: Messi sut phat dep mat hinh anh" title="Highlights Barca 4-0 PSV: Messi sút phạt đẹp mắt hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"><a href="/video-highlights-barca-4-0-psv-messi-sut-phat-dep-mat-post878004.html">
                                Highlights Barca 4-0 PSV: Messi sút phạt đẹp mắt
                            </a></p>
                        <time datetime="2018-09-19 05:49+0700"></time>
                    </header>
                </article>
            </section>
            <section class="order-list">
                <header>
                    <h2><a title="Đọc nhiều nhất">Đọc nhiều nhất</a></h2>
                </header>
                <article topic-id="4226,4616">
                    <span class="order">1</span>
                    <div class="cover">
                        <a href="/chu-khu-tro-gia-re-hiep-khung-bi-duoi-danh-sau-vu-hoa-hoan-post877913.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/lce_jwqcz/2018_09_18/hiep6_zing.jpg" alt="Chu khu tro gia re Hiep &#39;Khung&#39; bi duoi danh sau vu hoa hoan hinh anh" title="Chủ khu trọ giá rẻ Hiệp &#39;Khùng&#39; bị đuổi đánh sau vụ hỏa hoạn hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/chu-khu-tro-gia-re-hiep-khung-bi-duoi-danh-sau-vu-hoa-hoan-post877913.html">
                                Chủ khu trọ giá rẻ Hiệp 'Khùng' bị đuổi đánh sau vụ hỏa hoạn
                            </a>
                            <span class="social hot">HOT</span>
                            <span class="comment_count">121</span>
                        </p>
                        <time datetime="2018-09-19 00:05+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article topic-id="2001,2020,2208,2225,2369,2657,4150,4441">
                    <span class="order">2</span>
                    <div class="cover">
                        <a href="/tai-xe-lexus-bien-8888-bi-tong-chet-khi-dung-xe-theo-hieu-lenh-csgt-post877853.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/pwivovlb/2018_09_18/tai_nan_thumb.jpg" alt="Tai xe Lexus bien 8888 bi tong chet khi dung xe theo hieu lenh CSGT hinh anh" title="Tài xế Lexus biển 8888 bị tông chết khi dừng xe theo hiệu lệnh CSGT hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/tai-xe-lexus-bien-8888-bi-tong-chet-khi-dung-xe-theo-hieu-lenh-csgt-post877853.html">
                                Tài xế Lexus biển 8888 bị tông chết khi dừng xe theo hiệu lệnh CSGT
                            </a>
                            <span class="comment_count">92</span>
                        </p>
                        <time datetime="2018-09-19 08:54+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article topic-id="2003,3405">
                    <span class="order">3</span>
                    <div class="cover">
                        <a href="/nghe-si-tien-dua-ong-trum-phim-hai-tet-ve-noi-an-nghi-cuoi-cung-post877829.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/OpluOAA/2018_09_18/7dc5f43c4c54ac0af545.jpg" alt="Nghe si tien dua &#39;ong trum&#39; phim hai Tet ve noi an nghi cuoi cung hinh anh" title="Nghệ sĩ tiễn đưa &#39;ông trùm&#39; phim hài Tết về nơi an nghỉ cuối cùng hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/nghe-si-tien-dua-ong-trum-phim-hai-tet-ve-noi-an-nghi-cuoi-cung-post877829.html">
                                Nghệ sĩ tiễn đưa 'ông trùm' phim hài Tết về nơi an nghỉ cuối cùng
                            </a>
                            <span class="social hot">HOT</span>
                            <span class="comment_count">24</span>
                        </p>
                        <time datetime="2018-09-18 15:12+0700"></time>
                        <p class="cate">Sao Việt</p>
                    </header>
                </article>
                <article topic-id="4226,4616">
                    <span class="order">4</span>
                    <div class="cover">
                        <a href="/bac-hiep-khung-day-nha-bac-chay-het-roi-post877674.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/yfsgs/2018_09_17/HNchay.jpg" alt="&#39;Bac Hiep Khung day, nha bac chay het roi&#39; hinh anh" title="&#39;Bác Hiệp Khùng đây, nhà bác cháy hết rồi&#39; hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/bac-hiep-khung-day-nha-bac-chay-het-roi-post877674.html">
                                'Bác Hiệp Khùng đây, nhà bác cháy hết rồi'
                            </a>
                            <span class="social hot">HOT</span>
                            <span class="comment_count">64</span>
                        </p>
                        <time datetime="2018-09-18 06:24+0700"></time>
                        <p class="cate">Thời sự</p>
                    </header>
                </article>
                <article topic-id="4016,3835,3590,2226,2221">
                    <span class="order">5</span>
                    <div class="cover">
                        <a href="/thoi-tiet-ngay-189-mien-bac-tiep-tuc-mua-lon-post877610.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/ycgvpvpc/2018_09_17/18BB_thumb.jpg" alt="Thoi tiet ngay 18/9: Mien Bac tiep tuc mua lon hinh anh" title="Thời tiết ngày 18/9: Miền Bắc tiếp tục mưa lớn hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title">
                            <a href="/thoi-tiet-ngay-189-mien-bac-tiep-tuc-mua-lon-post877610.html">
                                Thời tiết ngày 18/9: Miền Bắc tiếp tục mưa lớn
                            </a>
                        </p>
                        <time datetime="2018-09-18 00:00+0700"></time>
                        <p class="cate">Đời sống</p>
                    </header>
                </article>
            </section>
            <div id="advR3" class="banner" style="width: 300px; height: 600px; border: 1px solid #eee; margin-bottom: 10px;"></div>
            <section id="promotedposts">
                <header>
                    <h2><a href="/TTDN.html" title="Thông tin doanh nghiệp">Thông tin doanh nghiệp </a></h2>
                </header>
                <article >
                    <div class="cover">
                        <a href="/thuong-hieu-chanel-chau-du-hoi-nghi-ket-noi-doanh-nghiep-viet-han-post878190.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_19/image001_12.jpg" alt="Thuong hieu Chanel Chau du hoi nghi ket noi doanh nghiep Viet - Han hinh anh" title="Thương hiệu Chanel Châu dự hội nghị kết nối doanh nghiệp Việt - Hàn hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/thuong-hieu-chanel-chau-du-hoi-nghi-ket-noi-doanh-nghiep-viet-han-post878190.html">
                            Thương hiệu Chanel Châu dự hội nghị kết nối doanh nghiệp Việt - Hàn
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/vbi-duoc-cap-chung-nhan-he-thong-quan-ly-an-toan-thong-tin-post878187.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_19/img20180417102616452ffa95.jpg" alt="VBI duoc cap chung nhan he thong quan ly an toan thong tin hinh anh" title="VBI được cấp chứng nhận hệ thống quản lý an toàn thông tin hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/vbi-duoc-cap-chung-nhan-he-thong-quan-ly-an-toan-thong-tin-post878187.html">
                            VBI được cấp chứng nhận hệ thống quản lý an toàn thông tin
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/so-huu-iphone-6s-6s-plus-gia-tu-4-6-trieu-dong-tai-di-dong-viet-post878165.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_19/image001_10.jpg" alt="So huu iPhone 6S, 6S Plus gia tu 4,6 trieu dong tai Di Dong Viet hinh anh" title="Sở hữu iPhone 6S, 6S Plus giá từ 4,6 triệu đồng tại Di Động Việt hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/so-huu-iphone-6s-6s-plus-gia-tu-4-6-trieu-dong-tai-di-dong-viet-post878165.html">
                            Sở hữu iPhone 6S, 6S Plus giá từ 4,6 triệu đồng tại Di Động Việt
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/phat-dong-cuoc-thi-miss-hanayuki-post878083.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_19/image001_6.jpg" alt="Phat dong cuoc thi Miss Hanayuki hinh anh" title="Phát động cuộc thi Miss Hanayuki hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/phat-dong-cuoc-thi-miss-hanayuki-post878083.html">
                            Phát động cuộc thi Miss Hanayuki
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/trai-nghiem-phong-cach-song-hong-kong-tai-chuoi-su-kien-in-style-post877643.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_17/image001_16.jpg" alt="Trai nghiem phong cach song Hong Kong tai chuoi su kien &#39;In Style&#39; hinh anh" title="Trải nghiệm phong cách sống Hong Kong tại chuỗi sự kiện &#39;In Style&#39; hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/trai-nghiem-phong-cach-song-hong-kong-tai-chuoi-su-kien-in-style-post877643.html">
                            Trải nghiệm phong cách sống Hong Kong tại chuỗi sự kiện 'In Style'
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/my-pham-e-zie-to-chuc-dai-hoi-tri-an-he-thong-khach-hang-post878043.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_19/image005.jpg" alt="My pham E&#39;Zie to chuc dai hoi tri an he thong khach hang hinh anh" title="Mỹ phẩm E&#39;Zie tổ chức đại hội tri ân hệ thống khách hàng hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/my-pham-e-zie-to-chuc-dai-hoi-tri-an-he-thong-khach-hang-post878043.html">
                            Mỹ phẩm E'Zie tổ chức đại hội tri ân hệ thống khách hàng
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/dia-chi-noi-toc-ben-dep-tai-ha-noi-post877818.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_18/image001_16.jpg" alt="Dia chi noi toc ben, dep tai Ha Noi hinh anh" title="Địa chỉ nối tóc bền, đẹp tại Hà Nội hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/dia-chi-noi-toc-ben-dep-tai-ha-noi-post877818.html">
                            Địa chỉ nối tóc bền, đẹp tại Hà Nội
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/benh-vien-tham-my-ngoc-phu-ung-dung-ky-thuat-tham-my-cat-mat-bambi-post877891.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_18/1_3.jpg" alt="Benh vien Tham my Ngoc Phu ung dung ky thuat tham my cat mat Bambi hinh anh" title="Bệnh viện Thẩm mỹ Ngọc Phú ứng dụng kỹ thuật thẩm mỹ cắt mắt Bambi hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/benh-vien-tham-my-ngoc-phu-ung-dung-ky-thuat-tham-my-cat-mat-bambi-post877891.html">
                            Bệnh viện Thẩm mỹ Ngọc Phú ứng dụng kỹ thuật thẩm mỹ cắt mắt Bambi
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/ap-dung-cong-nghe-moi-satori-gia-nhap-thi-truong-nuoc-giai-khat-post877852.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_18/image001_11.jpg" alt="Ap dung cong nghe moi, Satori gia nhap thi truong nuoc giai khat hinh anh" title="Áp dụng công nghệ mới, Satori gia nhập thị trường nước giải khát hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/ap-dung-cong-nghe-moi-satori-gia-nhap-thi-truong-nuoc-giai-khat-post877852.html">
                            Áp dụng công nghệ mới, Satori gia nhập thị trường nước giải khát
                        </a>
                        </p>
                    </header>
                </article>
                <article >
                    <div class="cover">
                        <a href="/phat-dong-chien-dich-atgt-cung-honda-viet-nam-tai-vinh-phuc-post877877.html">
                            <img src="https://znews-photo-td.zadn.vn/w480/Uploaded/wyhktpu/2018_09_18/3_Ong__Phung_Van_Hue__Truong_khoi_An_toan_Cong_ty_Honda_Viet_Nam.JPG" alt="Phat dong chien dich &#39;ATGT cung Honda Viet Nam&#39; tai Vinh Phuc hinh anh" title="Phát động chiến dịch &#39;ATGT cùng Honda Việt Nam&#39; tại Vĩnh Phúc hình ảnh">
                        </a>
                    </div>
                    <header>
                        <p class="title"></p>
                        <a href="/phat-dong-chien-dich-atgt-cung-honda-viet-nam-tai-vinh-phuc-post877877.html">
                            Phát động chiến dịch 'ATGT cùng Honda Việt Nam' tại Vĩnh Phúc
                        </a>
                        </p>
                    </header>
                </article>
            </section>
            <script>
                var posts = $('#promotedposts article');
                if ($(posts).length <= 5) {
                    $('#promotedposts article').show();
                    $('#promotedposts').show();
                } else {
                    var display = [];
                    while (display.length < 5) {
                        i = Math.floor(Math.random() * $(posts).length);
                        if (display.indexOf(i) == -1) display.push(i);
                    }
                    for (var i = 0, j = display.length; i < j; i++) {
                        $($(posts)[display[i]]).show();
                    };
                    $('#promotedposts').show();
                }
            </script>
        </section>
    </section>
</div>
