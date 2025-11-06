**Travel_app**

# 🚗 Trip Data Viewer (PHP + CSV Project)

This project is a simple **Trip Data Management and Viewer App** built using **PHP**.  
It reads trip information from a CSV file (`trip.csv`) and displays or processes it through a web interface (`index.php`).

## 📁 Project Structure


---

## 🧠 Features

- Reads trip details (like source, destination, date, distance, fare, etc.) from a CSV file  
- Displays data in a tabular format on a web page  
- Simple and lightweight — no database required  
- Easily customizable for adding search, filter, or analytics features

## ⚙️ How It Works

1. The `trip.csv` file stores trip-related data in comma-separated format.  
2. The `index.php` script:
   - Opens and reads the CSV file.
   - Parses each row and displays it as an HTML table.
   - Can be extended to include features like sorting or searching.

## 🚀 How to Run

1. Place all files in your local server directory (e.g., `htdocs` for XAMPP or `www` for WAMP).  
2. Start your local server (Apache).  
3. Open your browser and navigate to:

http://localhost/index.php

4. The trip data will be displayed on the page.

## 📊 Example CSV Format

Here’s an example of what your `trip.csv` might look like:

Trip_ID,Source,Destination,Date,Distance,Cost
1,Mumbai,Pune,2025-05-10,150,1200
2,Delhi,Agra,2025-06-14,230,2000
3,Ahmedabad,Surat,2025-07-21,270,1800

## 🧩 Future Improvements

- Add **search and filter** options for trips  
- Include **data visualization** using charts (e.g., trip frequency, cost trends)  
- Store trip data in a **MySQL database**  
- Export filtered data back to CSV  

## 🧑‍💻 Author

**Biraj Shah**   
💻 Built for learning and exploring PHP + CSV integration.



