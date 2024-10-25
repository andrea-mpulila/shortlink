<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky DataTable Example</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
    <style>
        th,
        td {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            width: 100%;
            margin: 0 auto;
        }

        table.dataTable {
            width: 100%;
        }

        .dataTables_scrollBody {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</head>

<body>

    <h2>Sticky DataTable with Scrollable Columns and Rows</h2>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Sticky Col</th>
                <th>Column 2</th>
                <th>Column 3</th>
                <th>Column 4</th>
                <th>Column 5</th>
                <th>Column 6</th>
                <th>Column 7</th>
                <th>Column 8</th>
                <th>Column 9</th>
                <th>Column 10</th>
                <th>Column 11</th>
                <th>Column 12</th>
                <th>Column 13</th>
                <th>Column 14</th>
                <th>Column 15</th>
                <th>Column 16</th>
                <th>Column 17</th>
                <th>Column 18</th>
                <th>Column 19</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sticky Row 1</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>

            </tr>
            <tr>
                <td>Sticky Row 2</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <tr>
                <td>Sticky Row 3</td>
                <td>Data 1-2</td>
                <td>Data 1-3</td>
                <td>Data 1-4</td>
                <td>Data 1-5</td>
                <td>Data 1-6</td>
                <td>Data 1-7</td>
                <td>Data 1-8</td>
                <td>Data 1-9</td>
                <td>Data 1-10</td>
                <td>Data 1-11</td>
                <td>Data 1-12</td>
                <td>Data 1-13</td>
                <td>Data 1-14</td>
                <td>Data 1-15</td>
                <td>Data 1-16</td>
                <td>Data 1-17</td>
                <td>Data 1-18</td>
                <td>Data 1-19</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                scrollY: "73vh",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 3
                }
            });
        });
    </script>

</body>

</html>
