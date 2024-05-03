-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2024 lúc 06:13 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mydb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Email` varchar(255) NOT NULL,
  `NameAccount` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `AvatarUrl` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Email`, `NameAccount`, `Name`, `Password`, `AvatarUrl`, `Status`) VALUES
('quandong2608@gmail.com', 'Dong Quan', 'dqdq2608', '12345@12345', '', 1),
('dongquan817@gmail.com', 'quann', 'quan', '123123', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `TypeName` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Describe` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`TypeName`, `ProductName`, `Price`, `ImageUrl`, `Describe`) VALUES
('dochoivandong', 'Máy gắp thú kích thước lớn có đèn và nhạc CHAMPION GAMES', '699,000', 'productImage/dochoivandong/dochoivandong3.jpg', ''),
('dochoivandong', 'Máy đập hành tinh chuột chũi CHAMPION GAMES', '459,000', 'productImage/dochoivandong/dochoivandong1.jpg', ''),
('dochoivandong', 'Trò chơi trận chiến không gian CHAMPION GAMES', '359,000', 'productImage/dochoivandong/dochoivandong2.jpg', ''),
('dochoivandong', 'Đồ chơi giải cứu chim cánh cụt CHAMPION GAMES', '89,000', 'productImage/dochoivandong/dochoivandong4.jpg', ''),
('doll', 'Bánh Mì Barber Bread', '72,000', 'productImage/doll/doll2.jpg', ''),
('doll', 'Hatchimals Pixes cánh thần tiên', '244,000', 'productImage/doll/doll4.jpg', ''),
('doll', 'MLP Quả trứng kỳ diệu', '69,000', 'productImage/doll/doll3.jpg', ''),
('doll', 'Mô hình nhân vật SMP CHAINSAW MAN - DENJI BANDAI CANDY', '1,369,000', 'productImage/doll/doll1.jpg', ''),
('lego', 'Đồ chơi lắp ráp Học viện Ma thuật và Pháp thuật Hogwarts LEGO HARRY POTTER', '5,299,000', 'productImage/lego/lego4.jpg', ''),
('lego', 'Đồ chơi lắp ráp Phi thuyền X-Wing Starfighter™ LEGO STAR WARS', '7,599,000', 'productImage/lego/lego1.jpg', ''),
('lego', 'Đồ chơi lắp ráp Phiên chợ Vương quốc Rosa LEGO DISNEY PRINCESS', '629,000', 'productImage/lego/lego3.jpg', ''),
('lego', 'Đồ chơi lắp ráp Vườn bách thảo LEGO FRIENDS', '2,599,000', 'productImage/lego/lego2.jpg', ''),
('robot', 'Mô hình Earthspark Warrior Megatron', '799,000', 'productImage/robot/robot3.jpg', '<p>\r\n              <h3>Đồ Chơi Mô Hình Earthspark Warrior Megatron TRANSFORMERS F6727/F6230</h3>\r\n              Đồ chơi Transformers mô hình Earthspark F6229 mô phỏng theo hoạt hình nổi tiếng được chuyển thể từ Transfomers và vẫn được đông đảo mọi người xem và theo dõi. Cho đến nay toàn bộ vũ trụ Transformers, các nhân vật đều được tạo hình robot và có thể lắp ráp thay đổi y như các nhân vật trong truyện tranh, phim ảnh.\r\n\r\n              <br>\r\n              Đồ chơi siêu robot Transformers gây ấn tượng với những đặc điểm nổi bật sau đây:\r\n              <br>\r\n              <ul style=\"margin-left: 30px;\">\r\n              <li>Sản phẩm phù hợp cho các bé nam có độ tuổi từ 6 tuổi trở lên.</li>\r\n              <li>Sở hữu thiết kế mô phỏng theo các nhân vật trong phim, không sản xuất hàng loạt theo một khuôn đúc. Từ khuôn mặt, vóc dáng, màu da cho đến trang phục, phụ kiện đều rất tinh tế, đẹp mắt.</li>\r\n              <li>Mô hình có thể lắp hình nhân vật robot hoặc xe chỉ trong vài bước lắp ráp. Điều này giúp tăng cường phát triển trí tuệ cũng như khả năng tư duy.</li>\r\n              <li>Sản phẩm làm từ nhựa cao cấp hoàn toàn không có chất kích ứng gây hại cho bé.</li>\r\n              <li>Các góc cạnh được bo tròn với bề mặt nhẵn tạo sự an toàn, không làm trầy xước da khi bé chơi</li>\r\n              <li>Đồ chơi giúp bé sẽ được thỏa thích chơi đùa, trò chuyện hoặc chơi nhập vai cùng người bạn Transformers yêu thích của mình. Từ đó kích thích trí tưởng tượng và sáng tạo của trẻ bay cao bay xa.</li>\r\n              </ul>\r\n          </p>'),
('robot', 'Mô hình Earthspark Warrior Thrash', '799,000', 'productImage/robot/robot2.jpg', '\r\n              <p>\r\n                  <h3>Đồ Chơi Mô Hình Earthspark Warrior Thrash TRANSFORMERS F6729/F6230</h3>\r\n                  Đồ chơi Transformers mô hình Earthspark F6229 mô phỏng theo hoạt hình nổi tiếng được chuyển thể từ Transfomers và vẫn được đông đảo mọi người xem và theo dõi. Cho đến nay toàn bộ vũ trụ Transformers, các nhân vật đều được tạo hình robot và có thể lắp ráp thay đổi y như các nhân vật trong truyện tranh, phim ảnh.\r\n\r\n                  <br>\r\n                  \r\n                  Đồ chơi siêu robot Transformers gây ấn tượng với những đặc điểm nổi bật sau đây:\r\n                  <br>\r\n                  <ul style=\"margin-left: 30px;\">\r\n                  <li>Sản phẩm phù hợp cho các bé nam có độ tuổi từ 6 tuổi trở lên.</li>\r\n                  <li>Sở hữu thiết kế mô phỏng theo các nhân vật trong phim, không sản xuất hàng loạt theo một khuôn đúc. Từ khuôn mặt, vóc dáng, màu da cho đến trang phục, phụ kiện đều rất tinh tế, đẹp mắt.</li>\r\n                  <li>Mô hình có thể lắp hình nhân vật robot hoặc xe chỉ trong vài bước lắp ráp. Điều này giúp tăng cường phát triển trí tuệ cũng như khả năng tư duy.</li>\r\n                  <li>Sản phẩm làm từ nhựa cao cấp hoàn toàn không có chất kích ứng gây hại cho bé.</li>\r\n                  <li>Các góc cạnh được bo tròn với bề mặt nhẵn tạo sự an toàn, không làm trầy xước da khi bé chơi</li>\r\n                  <li>Đồ chơi giúp bé sẽ được thỏa thích chơi đùa, trò chuyện hoặc chơi nhập vai cùng người bạn Transformers yêu thích của mình. Từ đó kích thích trí tưởng tượng và sáng tạo của trẻ bay cao bay xa.</li>\r\n                  </ul>\r\n</p>'),
('robot', 'Robot chú chó tinh nghịch', '649,000', 'productImage/robot/robot1.jpg', '\r\n                    <p>\r\n                    <h3>Đồ Chơi VECTO Robot Chú Chó Tinh Nghịch - Nô Đùa Cùng Bé VT18012</h3>\r\n                    \r\n                    Dễ thương và lém lỉnh, tinh nghịch nhưng đầy tháo vát. Robot chú chó tinh nghịch đã đến rồi đây. Các bé và ba mẹ đã sẵn sàng rước chú về chưa nè?\r\n                        <br>\r\n                    - Khả năng sủa giống hệt chó thật\r\n                        <br>\r\n                    - Nhảy múa theo nhạc cực Cool\r\n                        <br>\r\n                    - Chức năng lập trình một chuỗi động tác độc đáo\r\n                        <br>\r\n                    - Điều khiển linh hoạt tới, lui, trái , phải\r\n                        <br>\r\n                    Ngoài các chức năng nổi trội trên với thiết kế vẻ mặt cực kỳ dễ thương nhưng không kém phần nghịch ngợm sẽ giúp cho các giây phút vui chơi của bé vô cùng hào hứng.\r\n</p>\r\n'),
('robot', 'Đồ chơi Robot biến hình Xe xúc VECTO VT34', '129,000', 'productImage/robot/robot4.jpg', '<p>\r\n            <h3>Đồ Chơi Robot Biến Hình Xe Xúc VECTO VT34</h3>\r\n            Robot biến hình thành Xe xúc từ VECTO – Món đồ chơi biến hình siêu thú vị dành cho các bé trai, và giúp bé rèn luyện vận động tinh cực bổ ích.\r\n<br/>\r\n          <b>THÔNG TIN VỀ SẢN PHẨM:</b>\r\n          <br>   \r\n          Kích thước hộp hàng: 38.0 x 8.0 x 26.0 cm\r\n          <br>   \r\n          Chủ đề: VECTO ROBOT\r\n          <br>   \r\n          Năm sản xuất: 2023\r\n          <br>   \r\n          Xuất xứ thương hiệu: Việt Nam\r\n          <br>   \r\n          Chất liệu: Nhựa (An toàn tuyệt đối với bé)\r\n          <br>   \r\n        </p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `TypeName` varchar(255) NOT NULL,
  `ValueType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`TypeName`, `ValueType`) VALUES
('dochoivandong', 'Đồ chơi vận động'),
('doll', 'Búp bê'),
('lego', 'Đồ chơi lắp ghép'),
('robot', 'Robot');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receipt`
--

CREATE TABLE `receipt` (
  `ReceiptID` varchar(255) NOT NULL,
  `NameAccount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `receipt`
--

INSERT INTO `receipt` (`ReceiptID`, `NameAccount`) VALUES
('A001', 'Dong Quan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receiptdetail`
--

CREATE TABLE `receiptdetail` (
  `ReceiptID` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `TypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NameAccount`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`TypeName`,`ProductName`),
  ADD KEY `TypeName` (`TypeName`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`TypeName`);

--
-- Chỉ mục cho bảng `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`ReceiptID`,`NameAccount`),
  ADD KEY `NameAccount` (`NameAccount`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_typeproduct` FOREIGN KEY (`TypeName`) REFERENCES `producttype` (`TypeName`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `FK_nameaccount` FOREIGN KEY (`NameAccount`) REFERENCES `customer` (`NameAccount`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
