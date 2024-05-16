-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2024 lúc 05:29 AM
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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `NameAccount` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`NameAccount`, `Password`) VALUES
('dongquan268', 'dongquan268');

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
  `Status` int(11) NOT NULL DEFAULT 1,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Email`, `NameAccount`, `Name`, `Password`, `AvatarUrl`, `Status`, `Address`) VALUES
('trlgh@gmail.com', 'giahung345', 'Trương Lê Gia Hưng', 'giahung345', 'avauser/giahung345.jpg', 1, 'Thành Thái, Quận 10'),
('ducanh111@gmail.com', 'leducanh123', 'Lê Đức Anh', 'leducanh123', 'avauser/leducanh123.jpg', 1, 'Bình Tân'),
('pongpink0802@gmail.com', 'minhquan678', 'Trần Minh Quân', 'minhquan678', 'avauser/quan.jpg', 1, 'Bình Chánh'),
('trieutrieu@gmail.com', 'ngoctrieu789', 'Phạm Ngọc Triều', 'ngoctrieu789', 'avauser/trieu.jpg', 1, 'Quảng Ngãi'),
('jj2803@gmail.com', 'nguyenthanhdat123', 'Nguyễn Thành Đạt', 'nguyenthanhdat123', 'avauser/ronaldovn.jpg', 1, 'TP.HCM'),
('vietplus369@gmail.com', 'nguyenthanhviet123', 'Nguyễn Thành Việt', 'nguyenthanhviet123', 'avauser/viet+.jpg', 1, 'Chuồng chó'),
('123@gmail.com', 'quan', 'quan123', 'quan123', 'null', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `TypeName` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Describe` longtext NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`TypeName`, `ProductName`, `Price`, `ImageUrl`, `Describe`, `Status`) VALUES
('dochoivandong', 'Máy gắp thú kích thước lớn có đèn và nhạc CHAMPION GAMES', '699000', 'productImage/dochoivandong/dochoivandong3.jpg', 'Máy gắp thú kích thước lớn có đèn và nhạc là máy mô phỏng trò chơi gắp thú tại các khu vui chơi.', 1),
('dochoivandong', 'Máy đập hành tinh chuột chũi CHAMPION GAMES', '459000', 'productImage/dochoivandong/dochoivandong1.jpg', 'Máy đập hành tinh chuột chũi là máy mô phỏng trò chơi đập chuột chũi tại các khu vui chơi.', 1),
('dochoivandong', 'Trò chơi trận chiến không gian CHAMPION GAMES', '359000', 'productImage/dochoivandong/dochoivandong2.jpg', 'Trò chơi trận chiến không gian là một trò chơi đầy thú vị và gây cấn khi chơi cùng bạn bè và gia đình', 1),
('dochoivandong', 'Đồ chơi giải cứu chim cánh cụt CHAMPION GAMES', '89000', 'productImage/dochoivandong/dochoivandong4.jpg', 'Đồ chơi giải cứu chim cánh cụt là một món đồ chơi thú vị và đầy thử thách.', 1),
('doll', 'Bánh Mì Barber Bread', '72000', 'productImage/doll/doll2.jpg', 'Bộ đồ chơi Bánh Mini Cupcake Bread Barbershop BB32773 cho bé tự do sáng tạo nên những người bạn cupcake độc đáo bằng cách thay đổi chi tiết và phụ kiện.', 1),
('doll', 'Hatchimals Pixes cánh thần tiên', '244000', 'productImage/doll/doll4.jpg', 'Đồ chơi HATCHIMALS Pixies cánh thần tiên 6059069 là cô nàng búp bê sành điệu, một đại diện tiêu biểu cho thời trang của thế giới nhiệm màu Hatchtopia. Các dòng sản phẩm đồ chơi Hatchimals luôn có sự mới mẻ, sáng tạo nhất định nhằm tăng thêm sự hứng thú của bé trong quá trình vừa học vừa chơi.', 1),
('doll', 'MLP Quả trứng kỳ diệu', '69000', 'productImage/doll/doll3.jpg', 'MLP quá trứng kỳ diệu MY LITTLE PONY A8330T là mô hình đồ chơi mô phỏng sinh động theo nhân vật hoạt hình trong bộ phim nổi tiếng My Little Pony. Hình dáng chú ngựa nhiều màu sắc vô cùng đáng yêu sẽ tạo hứng thú cho bé khi chơi.  Sở hữu ngay quả trứng kỳ diệu để cùng con khám phá những bí ẩn bên trong nhé!', 1),
('doll', 'Mô hình nhân vật SMP CHAINSAW MAN - DENJI BANDAI CANDY', '1369000', 'productImage/doll/doll1.jpg', 'Bộ đồ chơi Mô hình nhân vật SMP CHAINSAW MAN - DENJI BANDAI CANDY cho bé tự do sáng tạo nên những người bạn cupcake độc đáo bằng cách thay đổi chi tiết và phụ kiện.', 1),
('lego', 'Học viện Ma thuật và Pháp thuật Hogwarts LEGO HARRY POTTER', '5299000', 'productImage/lego/lego4.jpg', 'Đắm mình trong trải nghiệm sáng tạo kỳ diệu với mô hình LEGO® đầu tiên của Học viện Ma thuật và Pháp thuật Hogwarts. Xây dựng Tòa Tháp Chính, Tháp Thiên văn, Đại sảnh đường, v.v. Khám phá những căn phòng mang tính biểu tượng như Phòng Chứa Bí mật™ và Phòng học môn Độc dược. Bên cạnh đó mô hình thu nhỏ của kiến trúc sư Hogwarts, Durmstrang Ship và các công trình xây dựng khác mà bạn sẽ nhận ra ngay lần đầu chiêm ngưỡng và hoàn thành bộ lâu đài pháp thuật đầy huyền bí.', 1),
('lego', 'Lego new', '600000', 'productImage/lego/pngtree.jpg', 'Do choi lego sieu moi', 1),
('lego', 'Phi thuyền X-Wing Starfighter™ LEGO STAR WARS', '7599000', 'productImage/lego/lego1.jpg', 'Tái hiện những pha hành động đầy kịch tính của bộ phim Star Wars: The Mandalorian khi xây dựng phiên bản Phi thuyền X-Wing Starfighter thuộc bộ sưu tập cao cấp. Bộ lắp ráp mang đầy đủ chi tiết theo phong cách LEGO®. Người chơi có thể trưng bày chiếc X-wing với 2 hình thái khác nhau, chế độ do thám hoặc chế độ tấn công cùng với chân đế đi kèm. Bộ lắp ráp gồm một Phi thuyền X-Wing Starfighter, một nhân vật minifigure Luke Skywalker và Robot R2-D2.', 1),
('lego', 'Phiên chợ Vương quốc Rosa LEGO DISNEY PRINCESS', '629000', 'productImage/lego/lego3.jpg', 'Tham quan thành phố Rosas cùng Asha! Bộ LEGO® Disney này được sáng tạo dựa trên bộ phim mới của Walt Disney Animation Studios, “Điều Ước” cùng với nhân vật Asha, Star và Valentino, và xem bạn có thể tìm thấy gì trong bộ lắp ráp này! Thành phố Rosas có bán các loại bánh ngọt, rau củ và nhiều trái cây thơm ngon, hấp dẫn.', 1),
('lego', 'Vườn bách thảo LEGO FRIENDS', '2599000', 'productImage/lego/lego2.jpg', 'Thể hiện tình yêu với thiên nhiên qua bộ lắp ráp Vườn Bách Thảo LEGO Friends. Xây dựng nhà kính và bổ sung thêm vào các loại cây cỏ, các loài hoa để hu vườn trở nên sống động. Vòm kính trong suốt có chức năng xoay để mô phỏng các chú bướm đang bay quanh - giống như trong một vườn thực sự. Trưng bày mô hình của bạn để thưởng thức khu vườn đáng yêu này quanh năm nhé!', 1),
('robot', 'Mô hình Earthspark Warrior Megatron', '799000', 'productImage/robot/robot3.jpg', 'Đồ chơi Transformers mô hình Earthspark F6229 mô phỏng theo hoạt hình nổi tiếng được chuyển thể từ Transfomers và vẫn được đông đảo mọi người xem và theo dõi. Cho đến nay toàn bộ vũ trụ Transformers, các nhân vật đều được tạo hình robot và có thể lắp ráp thay đổi y như các nhân vật trong truyện tranh, phim ảnh.', 1),
('robot', 'Mô hình Earthspark Warrior Thrash', '799000', 'productImage/robot/robot2.jpg', 'Đồ chơi Transformers mô hình Earthspark F6229 mô phỏng theo hoạt hình nổi tiếng được chuyển thể từ Transfomers và vẫn được đông đảo mọi người xem và theo dõi. Cho đến nay toàn bộ vũ trụ Transformers, các nhân vật đều được tạo hình robot và có thể lắp ráp thay đổi y như các nhân vật trong truyện tranh, phim ảnh.', 1),
('robot', 'Robot chú chó tinh nghịch', '649000', 'productImage/robot/robot1.jpg', 'Dễ thương và lém lỉnh, tinh nghịch nhưng đầy tháo vát. Robot chú chó tinh nghịch đã đến rồi đây. Các bé và ba mẹ đã sẵn sàng rước chú về chưa nè?\r\n', 1),
('robot', 'Đồ chơi Robot biến hình Xe xúc VECTO VT34', '129000', 'productImage/robot/robot4.jpg', 'Robot biến hình thành Xe xúc từ VECTO – Món đồ chơi biến hình siêu thú vị dành cho các bé trai, và giúp bé rèn luyện vận động tinh cực bổ ích.\r\n', 1);

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
  `ReceiptID` int(11) NOT NULL,
  `NameAccount` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `Method` int(11) NOT NULL,
  `DateReceipt` date DEFAULT current_timestamp(),
  `Address` varchar(255) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `receipt`
--

INSERT INTO `receipt` (`ReceiptID`, `NameAccount`, `Status`, `Method`, `DateReceipt`, `Address`, `Total`) VALUES
(1, 'quan', 0, 0, '2024-05-15', 'aaa', 1786000),
(2, 'leducanh123', 1, 1, '2024-05-15', 'aasas', 16567000),
(3, 'leducanh123', 1, 1, '2024-05-15', 'kkk', 799000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receiptdetail`
--

CREATE TABLE `receiptdetail` (
  `ReceiptID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `TypeName` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `receiptdetail`
--

INSERT INTO `receiptdetail` (`ReceiptID`, `ProductName`, `TypeName`, `Amount`) VALUES
(1, 'Hatchimals Pixes cánh thần tiên', 'doll', 2),
(1, 'Robot chú chó tinh nghịch', 'robot', 2),
(2, 'Mô hình nhân vật SMP CHAINSAW MAN - DENJI BANDAI CANDY', 'doll', 1),
(2, 'Phi thuyền X-Wing Starfighter™ LEGO STAR WARS', 'lego', 2),
(3, 'Mô hình Earthspark Warrior Thrash', 'robot', 1);

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
-- Chỉ mục cho bảng `receiptdetail`
--
ALTER TABLE `receiptdetail`
  ADD PRIMARY KEY (`ReceiptID`,`ProductName`),
  ADD KEY `ReceiptID` (`ReceiptID`),
  ADD KEY `ProductName` (`ProductName`,`TypeName`),
  ADD KEY `FK_productNameNtypeName` (`TypeName`,`ProductName`);

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

--
-- Các ràng buộc cho bảng `receiptdetail`
--
ALTER TABLE `receiptdetail`
  ADD CONSTRAINT `FK_productNameNtypeName` FOREIGN KEY (`TypeName`,`ProductName`) REFERENCES `product` (`TypeName`, `ProductName`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_receiptID` FOREIGN KEY (`ReceiptID`) REFERENCES `receipt` (`ReceiptID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
