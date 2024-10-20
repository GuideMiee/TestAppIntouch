def Calculate(x):
    for _ in range(7):  # ใช้ทุกวันเป็นเวลา 7 วัน
        x -= x / 3      # ใช้น้ำ 1/3 ของปริมาณที่เหลืออยู่ในถัง
    return x

# รับค่าปริมาณน้ำเริ่มต้นจากผู้ใช้งาน
initial_water = float(input("กรอกปริมาณน้ำในถัง (ลิตร): "))

# คำนวณปริมาณน้ำที่เหลือ
remaining_water = Calculate(initial_water)

# แสดงผลลัพธ์
print(f"น้ำที่เหลืออยู่ในถังหลังจาก 7 วัน: {remaining_water:.2f} ลิตร")
