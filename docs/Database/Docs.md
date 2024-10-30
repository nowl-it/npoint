# 1. Bảng Sinh viên (Students)

| Tên Cột         | Kiểu Dữ Liệu | Mô Tả                      |
| --------------- | ------------ | -------------------------- |
| `id`            | INT          | Mã sinh viên (PRIMARY KEY) |
| `name`          | VARCHAR      | Tên sinh viên              |
| `date_of_birth` | DATE         | Ngày sinh                  |
| `gender`        | VARCHAR      | Giới tính                  |
| `address`       | VARCHAR      | Địa chỉ                    |
| `phone_number`  | VARCHAR      | Số điện thoại              |
| `email`         | VARCHAR      | Email sinh viên            |
| `class_id`      | INT          | Mã lớp (FOREIGN KEY)       |

---

# 2. Bảng Môn học (Subjects)

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `subject_id`   | INT          | Mã môn học (PRIMARY KEY)        |
| `subject_name` | VARCHAR      | Tên môn học                    |
| `credit_hours` | INT          | Số tín chỉ                     |

---

# 3. Bảng Giảng viên (Teachers)

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `teacher_id`   | INT          | Mã giảng viên (PRIMARY KEY)     |
| `name`         | VARCHAR      | Tên giảng viên                 |
| `phone_number` | VARCHAR      | Số điện thoại                  |
| `email`        | VARCHAR      | Email giảng viên               |

---

# 4. Bảng Lớp học (Classes)

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `class_id`     | INT          | Mã lớp học (PRIMARY KEY)        |
| `class_name`   | VARCHAR      | Tên lớp học                    |
| `teacher_id`   | INT          | Mã giảng viên (FOREIGN KEY)     |
| `subject_id`   | INT          | Mã môn học (FOREIGN KEY)        |

---

# 5. Bảng Kết nối Học sinh - Lớp học (Student_Class)

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `student_id`   | INT          | Mã sinh viên (FOREIGN KEY)      |
| `class_id`     | INT          | Mã lớp học (FOREIGN KEY)        |
| **PRIMARY KEY**| (student_id, class_id) | Khóa chính kết hợp      |

---

# 6. Bảng Kết nối Lớp học - Môn học (Class_Subject)

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `class_id`     | INT          | Mã lớp học (FOREIGN KEY)        |
| `subject_id`   | INT          | Mã môn học (FOREIGN KEY)        |
| **PRIMARY KEY**| (class_id, subject_id) | Khóa chính kết hợp      |

---

# 7. Bảng Điểm danh (Attendance)

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `attendance_id`| INT          | Mã điểm danh (PRIMARY KEY)      |
| `student_id`   | INT          | Mã sinh viên (FOREIGN KEY)      |
| `class_id`     | INT          | Mã lớp học (FOREIGN KEY)        |
| `subject_id`   | INT          | Mã môn học (FOREIGN KEY)        |
| `date`         | DATE         | Ngày điểm danh                 |
| `status`       | VARCHAR      | Trạng thái (Có mặt/Vắng mặt)    |

---

# 8. Bảng Kết nối Học sinh - Môn học (Student_Subject) *(nếu cần)*

| Tên Cột        | Kiểu Dữ Liệu | Mô Tả                          |
|----------------|--------------|--------------------------------|
| `student_id`   | INT          | Mã sinh viên (FOREIGN KEY)      |
| `subject_id`   | INT          | Mã môn học (FOREIGN KEY)        |
| **PRIMARY KEY**| (student_id, subject_id) | Khóa chính kết hợp      |

---

# Mối Quan Hệ Tóm Tắt

- **Học sinh** có thể thuộc nhiều **Lớp học** qua bảng `Student_Class`.
- **Lớp học** có thể bao gồm nhiều **Môn học** qua bảng `Class_Subject`.
- **Học sinh** có thể học nhiều **Môn học** qua bảng `Student_Subject` *(nếu cần)*.
