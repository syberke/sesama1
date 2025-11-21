import pandas as pd
from faker import Faker
import random

fake = Faker('id_ID')  # lokal Indonesia
num_records = 1000

data = []

for _ in range(num_records):
    birth_date = fake.date_of_birth(minimum_age=1, maximum_age=18)

    record = {
        'qr_code': fake.uuid4(),
        'child_name': fake.first_name(),
        'Ayah_name': fake.first_name_male(),
        'Ibu_name': fake.first_name_female(),
        'birth_place': fake.city(),
        'wilayah': fake.state(),  # tambah kolom wilayah
        'birth_date': birth_date.strftime('%Y-%m-%d'),
        'reference': fake.bothify(text='REF-####'),
        'no_tlp': fake.phone_number(),
        'address': fake.address().replace("\n", ", "),
        'khitan': 'yes',
        'uang_bingkisan': 'yes',
        'fothobooth': 'yes',
        'khitan_received': '',
        'uang_bingkisan_received': '',
        'fothobooth_received': '',
        'is_distributed': '',
        'distributed_at': '',
        'created_at': '',
        'updated_at': '',
        'registrasi': ''
    }
    data.append(record)

# Buat DataFrame dan simpan ke Excel
df = pd.DataFrame(data)
df.to_excel('dummy_data.xlsx', index=False)

print("Selesai! File 'dummy_data.xlsx' telah dibuat dengan 1000 data termasuk kolom wilayah.")
