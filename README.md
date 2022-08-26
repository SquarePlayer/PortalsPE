# PortalsPE
Cách Tạo Cổng:

/portal pos1, Sau Đó Phá Vỡ Vị Trí 1 /portal pos2, Sau Đó Phá Vỡ Vị Trí 2 Đi đến nơi bạn muốn đích của cổng thông tin và thực hiện /portal create tên cổng thông tin Cờ: Mỗi cổng thông tin đều có một bộ cờ có thể sửa đổi hành vi của nó. Danh sách hiện tại của các cờ đã triển khai:

dịch chuyển tức thời: true / false. Nếu sai, cổng sẽ không dịch chuyển người chơi đến đích, nhưng sẽ vẫn thực hiện các lệnh (hữu ích, ví dụ: khi bạn muốn chuyển người chơi sang máy chủ khác) allowMode: true / false. Nếu đúng, người chơi phải có quyền portalspe.portal.portalname để sử dụng cổng thông tin autoload: true / false. Nếu đúng, plugin sẽ cố gắng tự động tải thế giới đích Lệnh: danh sách các lệnh sẽ được thực hiện khi người chơi vào cổng. Bạn có thể sử dụng các biến {portal} và {player} sẽ là tên cổng và tên trình phát Xem phần Commands belows để biết cách chỉnh sửa cờ. Commands:

/portal pos1 /portal pos2 /portal create /portal list: Xem Tên Các Cổng Đã Tạo /portal delete : xóa 1 cổng /portal flag teleport <true|false>: enables/disables dịch chuyển cờ /portal flag permissionMode <true|false>: enables/disables chế độ quyền /portal flag autoload <true|false>: enables/disables tải tự động trên toàn thế giới /portal flag addcommand : thêm 1 lệnh vào cổng /portal flag rmcommand : xóa 1 lệnh khỏi cổng /portal flag listcommands: danh sách lệnh Quyền:

portalspe.command.portal: dùng lệnh chính portalspe.portal.portalName: dùng portals Config:

version: 1

#Best choice may be "task" movement-detection: "task"

task-time: 3

lang: error: "Đích Của Cổng Này Là 1 Thế Giới Ko Tồn Tại Hoặc Ko Đc Tải" no-perm: "Bạn Ko Có Quyền Dùng Cổng Này" success: "Bạn Đã Vào Cổng"
