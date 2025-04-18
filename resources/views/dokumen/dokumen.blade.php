@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Fakultas</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('dashboard') }}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item active">Fakultas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid datatable-init">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-header pb-0 card-no-border d-flex justify-content-between align-items-center ">
                <h5>Complex Headers (rowspan and colspan) </h5>
                <a href=" {{ route('documents.create') }} " class="btn btn-primary btn-sm">
                + Tambah Fakultas
              </a>
              </div>
              <div class="card-body">
                <div class="table-responsive custom-scrollbar complex-header-table">
                  <table class="display border table-striped" id="basic-6">
                    <thead>
                      <tr>
                        <th rowspan="2">Name</th>
                        <th colspan="3">HR Information</th>
                        <th colspan="4">Contact</th>
                      </tr>
                      <tr>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Office</th>
                        <th>CV</th>
                        <th>Status</th>
                        <th>E-mail</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>$320,800</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf" href="sample.html" target="_blank"><i
                              class="icofont icofont-file-pdf"></i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>t.nixon@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>$170,750</td>
                        <td>Tokyo</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>g.winters@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>$86,000</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>a.cox@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>$433,060</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>c.kelly@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>$162,700</td>
                        <td>Tokyo</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>a.satou@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>$372,000</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>b.williamson@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>$137,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>h.chandler@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>$327,900</td>
                        <td>Tokyo</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>r.davidson@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>$205,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>c.hurst@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>$103,600</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>s.frost@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>$90,560</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>j.gaines@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>$342,000</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>q.flynn@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>$470,600</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>c.marshall@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>$313,500</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>h.kennedy@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>$385,750</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>t.fitzpatrick@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>$198,500</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>m.silva@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>$725,000</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>p.byrd@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>$237,500</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>g.little@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>$132,000</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>b.greer@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>$217,500</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>d.rios@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>$345,000</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>j.caldwell@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>$675,000</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>y.berry@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>$106,450</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>c.vance@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>$85,600</td>
                        <td>Sidney</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>d.wilder@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>CEO</td>
                        <td>$1,200,000</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>a.ramos@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>$92,575</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>g.joyce@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>$357,650</td>
                        <td>Singapore</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>j.chang@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>$206,850</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>b.wagner@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>$850,000</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>f.green@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>$163,000</td>
                        <td>Tokyo</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>s.itou@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>$95,400</td>
                        <td>Sidney</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>m.house@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>$114,500</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>s.burks@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>$145,000</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>p.bartlett@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>$235,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>g.cortez@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>$324,050</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>m.mccray@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>$85,675</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>u.butler@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>$164,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>h.hatfield@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>$109,850</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>h.fuentes@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>$452,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>v.harrell@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>$136,200</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>t.mooney@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>$645,750</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>j.bradshaw@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>$234,500</td>
                        <td>Singapore</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>o.liang@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>$163,500</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>b.nash@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>$139,575</td>
                        <td>Tokyo</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>s.yamamoto@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>$98,540</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>t.walton@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>$87,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>f.camacho@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>$138,575</td>
                        <td>Singapore</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>s.baldwin@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>$125,250</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>z.frank@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>$115,000</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>z.serrano@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>$75,650</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>j.acosta@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>$145,600</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>c.stevens@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>$356,250</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>h.butler@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>$103,500</td>
                        <td>London</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                        <td>l.greer@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>$86,500</td>
                        <td>San Francisco</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                        <td>j.alexander@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>$183,000</td>
                        <td>Edinburgh</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>s.decker@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>$183,000</td>
                        <td>Singapore</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>m.bruce@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>$112,000</td>
                        <td>New York</td>
                        <td class="action"> <a class="pdf"
                            href="https://admin.pixelstrap.com/cuba/assets/pdf/sample.pdf" target="_blank"><i
                              class="icofont icofont-file-pdf"> </i></a></td>
                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                        <td>d.snider@datatables.net</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="#!"><i
                                  class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a href="#!"><i class="fa-solid fa-trash-can"></i></a></li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Office</th>
                        <th>CV </th>
                        <th>Status</th>
                        <th>E-mail</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
