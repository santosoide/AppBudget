<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 8:00
 */

namespace AppBudget\Repositories\Eloquent\User;

use AppBudget\Models\User\User;
use AppBudget\Repositories\Eloquent\AbstractRepository;
use AppBudget\Repositories\RepositoryInterface\UserRepositoryInterface;
use AppBudget\Services\Forms\User\CreateNewUserForm;
use AppBudget\Services\Forms\User\EditUserForm;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{

    /**
     * Instance Model User
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Menampilkan data, pencarian, pagination
     * FullTextSearch
     *
     * @param $term
     * @return mixed
     */
    public function find($term)
    {
        return $this->model
            ->FullTextSearch($term)
            ->paginate(10);
    }

    /**
     * Menampilkan detil data
     *
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function destroy($id)
    {
        $data = $this->findById($id);

        $data->delete();

        return ['berhasil hapus data'];

    }

    /**
     * Store new user
     *
     * @param array $data
     * @return array
     */
    public function create(array $data)
    {
        $user = $this->getNew();

        $user->_id = $this->getUuid();
        $user->nama = e($data['nama']);
        $user->email = e($data['email']);
        $user->password = \Hash::make($data['password']);
        $user->organisasi_id = $this->getUuid();
//        $user->is_admin = $data['is_admin'];
//        $user->is_active = $data['is_active'];
        $user->save();

        return [
            'sukses' => 'Data berhasil disimpan.'
        ];
    }

    /**
     * Get input form
     *
     * @return CreateNewUserForm
     */
    public function getCreationForm()
    {
        return new CreateNewUserForm();
    }

    /**
     * Get edit form
     *
     * @return EditUserForm
     */
    public function getEditForm()
    {
        return new EditUserForm();
    }

} 